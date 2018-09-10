<?php
/* Copyright (c) 1998-2018 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
 * @author  Niels Theen <ntheen@databay.de>
 */
class ilCertificateSettingsCourseFormRepository implements ilCertificateFormRepository
{
	/**
	 * @var ilLanguage
	 */
	private $language;

	/**
	 * @var ilCertificateSettingsFormRepository
	 */
	private $settingsFromFactory;

	/**
	 * @var \ilObject
	 */
	private $object;

	/**
	 * @var ilObjectLP|mixed
	 */
	private $learningProgressObject;

	/**
	 * @param ilObject $object
	 * @param string $certificatePath
	 * @param ilLanguage $language
	 * @param ilTemplate $template
	 * @param ilCtrl $controller
	 * @param ilAccess $access
	 * @param ilToolbarGUI $toolbar
	 * @param ilCertificatePlaceholderDescription $placeholderDescriptionObject
	 * @param ilObjectLP|null $learningProgressObject
	 */
	public function __construct(
		\ilObject $object,
		string $certificatePath,
		ilLanguage $language,
		ilTemplate $template,
		ilCtrl $controller,
		ilAccess $access,
		ilToolbarGUI $toolbar,
		ilCertificatePlaceholderDescription $placeholderDescriptionObject,
		ilObjectLP $learningProgressObject = null
	) {
		$this->object = $object;

		$this->language = $language;

		$this->settingsFromFactory = new ilCertificateSettingsFormRepository(
			$object->getId(),
			$certificatePath,
			$language,
			$template,
			$controller,
			$access,
			$toolbar,
			$placeholderDescriptionObject
		);

		if (null === $learningProgressObject) {
			$learningProgressObject = ilObjectLP::getInstance($this->object->getId();
		}
		$this->learningProgressObject = $learningProgressObject;
	}

	/**
	 * @param ilCertificateGUI $certificateGUI
	 * @param ilCertificate $certificateObject
	 *
	 * @return ilPropertyFormGUI
	 *
	 * @throws ilException
	 * @throws ilWACException
	 */
	public function createForm(ilCertificateGUI $certificateGUI, ilCertificate $certificateObject)
	{
		$form = $this->settingsFromFactory->createForm($certificateGUI, $certificateObject);

		$learningProgressMode = $this->learningProgressObject->getCurrentMode();

		if($learningProgressMode === ilLPObjSettings::LP_MODE_DEACTIVATED) {
			$subitems = new ilRepositorySelector2InputGUI($this->language->txt('objects'), 'subitems', true);

			$formSection = new \ilFormSectionHeaderGUI();
			$formSection->setTitle($this->language->txt('course_certificate_options'));
			$form->addItem($formSection);

			$exp = $subitems->getExplorerGUI();
			$exp->setSkipRootNode(true);
			$exp->setRootId($this->object->getRefId());
			$exp->setTypeWhiteList($this->getLPTypes($this->object->getId()));

			$subitems->setTitleModifier(function ($id) {
				$obj_id = ilObject::_lookupObjId($id);
				$olp = ilObjectLP::getInstance($obj_id);

				$invalid_modes = ilCourseLPBadgeGUI::getInvalidLPModes();

				$mode = $olp->getModeText($olp->getCurrentMode());

				if(in_array($olp->getCurrentMode(), $invalid_modes)) {
					$mode = '<strong>' . $mode . '</strong>';
				}
				return ilObject::_lookupTitle(ilObject::_lookupObjId($id)).' ('.$mode.')';
			});

			$subitems->setRequired(true);
			$form->addItem($subitems);
		}

		return $form;
	}

	/**
	 * @param array $formFields
	 */
	public function save(array $formFields)
	{
		$courseSetting = new ilSetting('crs');
		$courseSetting->set('cert_subitems_' . $this->object->getId(), json_encode($formFields['subitems']));
	}

	/**
	 * @param string $content
	 * @return array|mixed
	 */
	public function fetchFormFieldData(string $content)
	{
		$formFields = $this->settingsFromFactory->fetchFormFieldData($content);

		$courseSetting = new ilSetting('crs');
		$formFields['subitems'] = json_decode($courseSetting->get('cert_subitems_' . $this->object->getId(), $formFields['subitems']));

		return $formFields;
	}

	/**
	 * @param int $a_parent_ref_id
	 * @return array
	 */
	private function getLPTypes(int $a_parent_ref_id)
	{
		global $DIC;

		$tree = $DIC['tree'];

		$res = array();

		$root = $tree->getNodeData($a_parent_ref_id);
		$sub_items = $tree->getSubTree($root);
		array_shift($sub_items); // remove root

		foreach($sub_items as $node) {
			if(ilObjectLP::isSupportedObjectType($node['type'])) {
				$class = ilObjectLP::getTypeClass($node['type']);
				$modes = $class::getDefaultModes(ilObjUserTracking::_enabledLearningProgress());

				if(sizeof($modes) > 1) {
					$res[] = $node['type'];
				}
			}
		}

		return $res;
	}

}
