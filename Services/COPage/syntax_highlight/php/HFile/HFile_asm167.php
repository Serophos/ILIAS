<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_asm167 extends HFile
  {
      public function HFile_asm167()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // ASM for C167
          /*************************************/
          // Flags

          $this->nocase            	= "1";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "gray", "purple", "gray", "brown", "blue", "purple", "brown");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array();
          $this->unindent          	= array();

          // String characters and delimiters

          $this->stringchars       	= array("\"", "'");
          $this->delimiters        	= array("-", "+", "?", "(", ")", "[", "]", ":", ";", "\"", "'", " ", ",", "	", "#");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array(";");
          $this->blockcommenton    	= array("");
          $this->blockcommentoff   	= array("");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "ADD" => "1",
            "ADDB" => "1",
            "ADDC" => "1",
            "ADDCB" => "1",
            "AND" => "1",
            "ANDB" => "1",
            "ASHR" => "1",
            "ATOMIC" => "1",
            "BAND" => "1",
            "BCLR" => "1",
            "BCMP" => "1",
            "BFLDH" => "1",
            "BFLDL" => "1",
            "BMOV" => "1",
            "BMOVN" => "1",
            "BOR" => "1",
            "BSET" => "1",
            "BXOR" => "1",
            "CALL" => "1",
            "CALLA" => "1",
            "CALLI" => "1",
            "CALLR" => "1",
            "CALLS" => "1",
            "CMP" => "1",
            "CMPB" => "1",
            "CMPD1" => "1",
            "CMPD2" => "1",
            "CMPI1" => "1",
            "CMPI2" => "1",
            "CPL" => "1",
            "CPLB" => "1",
            "DISWDT" => "1",
            "DIV" => "1",
            "DIVL" => "1",
            "DIVLU" => "1",
            "DIVU" => "1",
            "EINIT" => "1",
            "EXTP" => "1",
            "EXTPR" => "1",
            "EXTR" => "1",
            "EXTS" => "1",
            "EXTSR" => "1",
            "IDLE" => "1",
            "JB" => "1",
            "JBC" => "1",
            "JMP" => "1",
            "JMPA" => "1",
            "JMPI" => "1",
            "JMPR" => "1",
            "JMPS" => "1",
            "JNB" => "1",
            "JNBS" => "1",
            "MOV" => "1",
            "MOVB" => "1",
            "MOVBS" => "1",
            "MOVBZ" => "1",
            "MUL" => "1",
            "MULU" => "1",
            "NEG" => "1",
            "NEGB" => "1",
            "NOP" => "1",
            "OR" => "1",
            "ORB" => "1",
            "PCALL" => "1",
            "POP" => "1",
            "PRIOR" => "1",
            "PUSH" => "1",
            "PWRDN" => "1",
            "RET" => "1",
            "RETI" => "1",
            "RETP" => "1",
            "RETS" => "1",
            "RETV" => "1",
            "ROL" => "1",
            "ROR" => "1",
            "SCXT" => "1",
            "SHL" => "7",
            "SHR" => "7",
            "SRST" => "1",
            "SRVWDT" => "1",
            "SUB" => "1",
            "SUBB" => "1",
            "SUBC" => "1",
            "SUBCB" => "1",
            "TRAP" => "1",
            "XOR" => "1",
            "XORB" => "1",
            "ADCIC" => "2",
            "ADCON" => "2",
            "ADDAT" => "2",
            "ADDAT2" => "2",
            "ADDRSEL1" => "2",
            "ADDRSEL2" => "2",
            "ADDRSEL3" => "2",
            "ADDRSEL4" => "2",
            "ADEIC" => "2",
            "BUSCON0" => "2",
            "BUSCON1" => "2",
            "BUSCON2" => "2",
            "BUSCON3" => "2",
            "BUSCON4" => "2",
            "C1BTR" => "2",
            "C1CSR" => "2",
            "C1GMS" => "2",
            "C1IR" => "2",
            "C1LGML" => "2",
            "C1LMLM" => "2",
            "C1UGML" => "2",
            "CAPREL" => "2",
            "CC0" => "2",
            "CC0IC" => "2",
            "CC1" => "2",
            "CC10" => "2",
            "CC10IC" => "2",
            "CC11" => "2",
            "CC11IC" => "2",
            "CC12" => "2",
            "CC12IC" => "2",
            "CC13" => "2",
            "CC13IC" => "2",
            "CC14" => "2",
            "CC14IC" => "2",
            "CC15" => "2",
            "CC15IC" => "2",
            "CC16" => "2",
            "CC16IC" => "2",
            "CC17" => "2",
            "CC17IC" => "2",
            "CC18" => "2",
            "CC18IC" => "2",
            "C19" => "2",
            "CC19IC" => "2",
            "CC1IC" => "2",
            "CC2" => "2",
            "CC20" => "2",
            "CC20IC" => "2",
            "CC21" => "2",
            "CC21IC" => "2",
            "CC22" => "2",
            "CC22IC" => "2",
            "CC23" => "2",
            "CC23IC" => "2",
            "CC24" => "2",
            "CC24IC" => "2",
            "CC25" => "2",
            "CC25IC" => "2",
            "CC26" => "2",
            "CC26IC" => "2",
            "CC27" => "2",
            "CC27IC" => "2",
            "CC28" => "2",
            "CC28IC" => "2",
            "CC29" => "2",
            "CC29IC" => "2",
            "CC2IC" => "2",
            "CC3" => "2",
            "CC30" => "2",
            "CC30IC" => "2",
            "CC31" => "2",
            "CC31IC" => "2",
            "CC3IC" => "2",
            "CC4" => "2",
            "CC4IC" => "2",
            "CC5" => "2",
            "CC5IC" => "2",
            "CC6" => "2",
            "CC6IC" => "2",
            "CC7" => "2",
            "CC7IC" => "2",
            "CC8" => "2",
            "CC8IC" => "2",
            "CC9" => "2",
            "CC9IC" => "2",
            "CCM0" => "2",
            "CCM1" => "2",
            "CCM2" => "2",
            "CCM3" => "2",
            "CCM4" => "2",
            "CCM5" => "2",
            "CCM6" => "2",
            "CCM7" => "2",
            "CP" => "2",
            "CRIC" => "2",
            "CSP" => "2",
            "DP0H" => "2",
            "DP0L" => "2",
            "DP1H" => "2",
            "DP1L" => "2",
            "DP2" => "2",
            "DP3" => "2",
            "DP4" => "2",
            "DP6" => "2",
            "DP7" => "2",
            "DP8" => "2",
            "DPP0" => "2",
            "DPP1" => "2",
            "DPP2" => "2",
            "DPP3" => "2",
            "DSTP0" => "2",
            "DSTP1" => "2",
            "DSTP2" => "2",
            "DSTP3" => "2",
            "DSTP4" => "2",
            "DSTP5" => "2",
            "DSTP6" => "2",
            "DSTP7" => "2",
            "EMUCON" => "2",
            "EXICON" => "2",
            "EXISEL" => "2",
            "IDCHIP" => "2",
            "IDMANUF" => "2",
            "IDMEM" => "2",
            "IDPROG" => "2",
            "IDX1" => "2",
            "IDX2" => "2",
            "IDX3" => "2",
            "ISNC" => "2",
            "LAR" => "2",
            "MCFG" => "2",
            "MCR" => "2",
            "MDC" => "2",
            "MDH" => "2",
            "MDL" => "2",
            "ODP2" => "2",
            "ODP3" => "2",
            "ODP4" => "2",
            "ODP6" => "2",
            "ODP7" => "2",
            "ODP8" => "2",
            "ONES" => "2",
            "P0H" => "2",
            "P0L" => "2",
            "P1DAIS" => "2",
            "P1H" => "2",
            "P1L" => "2",
            "P2" => "2",
            "P3" => "2",
            "P4" => "2",
            "P5" => "2",
            "P5DIDIS" => "2",
            "P6" => "2",
            "P7" => "2",
            "P8" => "2",
            "PECC0" => "2",
            "PECC1" => "2",
            "PECC2" => "2",
            "PECC3" => "2",
            "PECC4" => "2",
            "PECC5" => "2",
            "PECC6" => "2",
            "PECC7" => "2",
            "PICON" => "2",
            "POCON0H" => "2",
            "POCON0L" => "2",
            "POCON1H" => "2",
            "POCON1L" => "2",
            "POCON2" => "2",
            "POCON20" => "2",
            "POCON3" => "2",
            "POCON4" => "2",
            "POCON6" => "2",
            "POCON7" => "2",
            "POCON8" => "2",
            "PP0" => "2",
            "PP1" => "2",
            "PP2" => "2",
            "PP3" => "2",
            "PSW" => "2",
            "PT0" => "2",
            "PT1" => "2",
            "PT2" => "2",
            "PT3" => "2",
            "PTCR" => "2",
            "PW0" => "2",
            "PW1" => "2",
            "PW2" => "2",
            "PW3" => "2",
            "PWMCON0" => "2",
            "PWMCON1" => "2",
            "PWMIC" => "2",
            "R0" => "2",
            "R1" => "2",
            "R10" => "2",
            "R11" => "2",
            "R12" => "2",
            "R13" => "2",
            "R14" => "2",
            "R15" => "2",
            "R2" => "2",
            "R3" => "2",
            "R4" => "2",
            "R5" => "2",
            "R6" => "2",
            "R7" => "2",
            "R8" => "2",
            "R9" => "2",
            "RH0" => "2",
            "RH1" => "2",
            "RH2" => "2",
            "RH3" => "2",
            "RH4" => "2",
            "RH5" => "2",
            "RH6" => "2",
            "RH7" => "2",
            "RL0" => "2",
            "RL1" => "2",
            "RL2" => "2",
            "RL3" => "2",
            "RL4" => "2",
            "RL5" => "2",
            "RL6" => "2",
            "RL7" => "2",
            "RP0H" => "2",
            "RTCH" => "2",
            "RTCL" => "2",
            "S0BG" => "2",
            "S0CON" => "2",
            "S0EIC" => "2",
            "S0RBUF" => "2",
            "S0RIC" => "2",
            "S0TBIC" => "2",
            "S0TBUF" => "2",
            "S0TIC" => "2",
            "SP" => "2",
            "SRCP0" => "2",
            "SRCP1" => "2",
            "SRCP2" => "2",
            "SRCP3" => "2",
            "SRCP4" => "2",
            "SRCP5" => "2",
            "SRCP6" => "2",
            "SRCP7" => "2",
            "SSCBR" => "2",
            "SSCCON" => "2",
            "SSCEIC" => "2",
            "SSCRB" => "2",
            "SSCRIC" => "2",
            "SSCTB" => "2",
            "SSCTIC" => "2",
            "STKOV" => "2",
            "STKUN" => "2",
            "SYSCON" => "2",
            "SYSCON2" => "2",
            "SYSCON3" => "2",
            "T0" => "2",
            "T01CON" => "2",
            "T0IC" => "2",
            "T0REL" => "2",
            "T1" => "2",
            "T14" => "2",
            "T14REL" => "2",
            "T1IC" => "2",
            "T1REL" => "2",
            "T2" => "2",
            "T2CON" => "2",
            "T2IC" => "2",
            "T3" => "2",
            "T3CON" => "2",
            "T3IC" => "2",
            "T4" => "2",
            "T4CON" => "2",
            "T4IC" => "2",
            "T5" => "2",
            "T5CON" => "2",
            "T5IC" => "2",
            "T6" => "2",
            "T6CON" => "2",
            "T6IC" => "2",
            "T7" => "2",
            "T78CON" => "2",
            "T7IC" => "2",
            "T7REL" => "2",
            "T8" => "2",
            "T8IC" => "2",
            "T8REL" => "2",
            "TFR" => "2",
            "TRCON" => "2",
            "WDT" => "2",
            "WDTCON" => "2",
            "XP0IC" => "2",
            "XP1IC" => "2",
            "XP2IC" => "2",
            "XP3IC" => "2",
            "XPERCON" => "2",
            "ZEROS" => "2",
            "A0" => "3",
            "A16" => "3",
            "A17" => "3",
            "A18" => "3",
            "A19" => "3",
            "A1" => "3",
            "A20" => "3",
            "A21" => "3",
            "A22" => "3",
            "A23" => "3",
            "A2" => "3",
            "A3" => "3",
            "A4" => "3",
            "A5" => "3",
            "A6" => "3",
            "A7" => "3",
            "ACC0" => "3",
            "ACC10" => "3",
            "ACC11" => "3",
            "ACC12" => "3",
            "ACC13" => "3",
            "ACC14" => "3",
            "ACC15" => "3",
            "ACC16" => "3",
            "ACC17" => "3",
            "ACC18" => "3",
            "ACC19" => "3",
            "ACC1" => "3",
            "ACC20" => "3",
            "ACC21" => "3",
            "ACC22" => "3",
            "ACC23" => "3",
            "ACC24" => "3",
            "ACC25" => "3",
            "ACC26" => "3",
            "ACC27" => "3",
            "ACC28" => "3",
            "ACC29" => "3",
            "ACC2" => "3",
            "ACC30" => "3",
            "ACC31" => "3",
            "ACC3" => "3",
            "ACC4" => "3",
            "ACC5" => "3",
            "ACC6" => "3",
            "ACC7" => "3",
            "ACC8" => "3",
            "ACC9" => "3",
            "ADBSY" => "3",
            "ADCDIS" => "3",
            "ADCIE" => "3",
            "ADCIN" => "3",
            "ADCIR" => "3",
            "ADCRQ" => "3",
            "ADEIE" => "3",
            "ADEIR" => "3",
            "ADST" => "3",
            "ADWR" => "3",
            "ADX" => "3",
            "ALECTL0" => "3",
            "ALECTL1" => "3",
            "ALECTL2" => "3",
            "ALECTL3" => "3",
            "ALECTL4" => "3",
            "AN0" => "3",
            "AN10" => "3",
            "AN11" => "3",
            "AN12" => "3",
            "AN13" => "3",
            "AN14" => "3",
            "AN15" => "3",
            "AN1" => "3",
            "AN2" => "3",
            "AN3" => "3",
            "AN4" => "3",
            "AN5" => "3",
            "AN6" => "3",
            "AN7" => "3",
            "AN8" => "3",
            "AN9" => "3",
            "ASC0DIS" => "3",
            "BDRSTEN" => "3",
            "BHE" => "3",
            "BREQ" => "3",
            "BSWC0" => "3",
            "BSWC1" => "3",
            "BSWC2" => "3",
            "BSWC3" => "3",
            "BSWC4" => "3",
            "BUSACT0" => "3",
            "BUSACT1" => "3",
            "BUSACT2" => "3",
            "BUSACT3" => "3",
            "BUSACT4" => "3",
            "BYTDIS" => "3",
            "C" => "3",
            "CAN1DIS" => "3",
            "CAN2DIS" => "3",
            "CAPIN" => "3",
            "CC0IE" => "3",
            "CC0IO" => "3",
            "CC0IR" => "3",
            "CC10IE" => "3",
            "CC10IO" => "3",
            "CC10IR" => "3",
            "CC11IE" => "3",
            "CC11IO" => "3",
            "CC11IR" => "3",
            "CC12IE" => "3",
            "CC12IO" => "3",
            "CC12IR" => "3",
            "CC13IE" => "3",
            "CC13IO" => "3",
            "CC13IR" => "3",
            "CC14IE" => "3",
            "CC14IO" => "3",
            "CC14IR" => "3",
            "CC15IE" => "3",
            "CC15IO" => "3",
            "CC15IR" => "3",
            "CC16IE" => "3",
            "CC16IO" => "3",
            "CC16IR" => "3",
            "CC17IE" => "3",
            "CC17IO" => "3",
            "CC17IR" => "3",
            "CC18IE" => "3",
            "CC18IO" => "3",
            "CC18IR" => "3",
            "CC19IE" => "3",
            "CC19IO" => "3",
            "CC19IR" => "3",
            "CC1DIS" => "3",
            "CC1IE" => "3",
            "CC1IO" => "3",
            "CC1IR" => "3",
            "CC20IE" => "3",
            "CC20IO" => "3",
            "CC20IR" => "3",
            "CC21IE" => "3",
            "CC21IO" => "3",
            "CC21IR" => "3",
            "CC22IE" => "3",
            "CC22IO" => "3",
            "CC22IR" => "3",
            "CC23IE" => "3",
            "CC23IO" => "3",
            "CC23IR" => "3",
            "CC24IE" => "3",
            "CC24IO" => "3",
            "CC24IR" => "3",
            "CC25IE" => "3",
            "CC25IO" => "3",
            "CC25IR" => "3",
            "CC26IE" => "3",
            "CC26IO" => "3",
            "CC26IR" => "3",
            "CC27IE" => "3",
            "CC27IO" => "3",
            "CC27IR" => "3",
            "CC28IE" => "3",
            "CC28IO" => "3",
            "CC28IR" => "3",
            "CC29IE" => "3",
            "CC29IO" => "3",
            "CC29IR" => "3",
            "CC2DIS" => "3",
            "CC2IE" => "3",
            "CC2IO" => "3",
            "CC2IR" => "3",
            "CC30IE" => "3",
            "CC30IO" => "3",
            "CC30IR" => "3",
            "CC31IE" => "3",
            "CC31IO" => "3",
            "CC31IR" => "3",
            "CC3IE" => "3",
            "CC3IO" => "3",
            "CC3IR" => "3",
            "CC4IE" => "3",
            "CC4IO" => "3",
            "CC4IR" => "3",
            "CC5IE" => "3",
            "CC5IO" => "3",
            "CC5IR" => "3",
            "CC6IE" => "3",
            "CC6IO" => "3",
            "CC6IR" => "3",
            "CC7IE" => "3",
            "CC7IO" => "3",
            "CC7IR" => "3",
            "CC8IE" => "3",
            "CC8IO" => "3",
            "CC8IR" => "3",
            "CC9IE" => "3",
            "CC9IO" => "3",
            "CC9IR" => "3",
            "CLKEN" => "3",
            "CLKLOCK" => "3",
            "CLKOUT" => "3",
            "CRIE" => "3",
            "CRIR" => "3",
            "CS0" => "3",
            "CS1CS2" => "3",
            "CS3" => "3",
            "CS4" => "3",
            "CSCFG" => "3",
            "CSREN0" => "3",
            "CSREN1" => "3",
            "CSREN2" => "3",
            "CSREN3" => "3",
            "CSREN4" => "3",
            "CSWEN0" => "3",
            "CSWEN1" => "3",
            "CSWEN2" => "3",
            "CSWEN3" => "3",
            "CSWEN4" => "3",
            "D0" => "3",
            "D10" => "3",
            "D11" => "3",
            "D12" => "3",
            "D13" => "3",
            "D14" => "3",
            "D15" => "3",
            "D1" => "3",
            "D2" => "3",
            "D3" => "3",
            "D4" => "3",
            "D5" => "3",
            "D6" => "3",
            "D7" => "3",
            "D8" => "3",
            "D9" => "3",
            "E" => "3",
            "EWEN0" => "3",
            "EWEN1" => "3",
            "EWEN2" => "3",
            "EWEN3" => "3",
            "EWEN4" => "3",
            "FMDIS" => "3",
            "GPTDIS" => "3",
            "HLDA" => "3",
            "HLDEN" => "3",
            "HOLD" => "3",
            "IEN" => "3",
            "ILLBUS" => "3",
            "ILLINA" => "3",
            "ILLOPA" => "3",
            "LHWR" => "3",
            "MDRIU" => "3",
            "MON" => "3",
            "MRST" => "3",
            "MTSR" => "3",
            "MTTC0" => "3",
            "MTTC1" => "3",
            "MTTC2" => "3",
            "MTTC3" => "3",
            "MTTC4" => "3",
            "MULIP" => "3",
            "N" => "3",
            "NMI" => "3",
            "OWDDIS" => "3",
            "P2HIN" => "3",
            "P2LIN" => "3",
            "P3HIN" => "3",
            "P3LIN" => "3",
            "P7LIN" => "3",
            "P8LIN" => "3",
            "PB01" => "3",
            "PCDDIS" => "3",
            "PEN0" => "3",
            "PEN1" => "3",
            "PEN2" => "3",
            "PEN3" => "3",
            "PIE0" => "3",
            "PIE1" => "3",
            "PIE2" => "3",
            "PIE3" => "3",
            "PIR0" => "3",
            "PIR1" => "3",
            "PIR2" => "3",
            "PIR3" => "3",
            "PLLIE" => "3",
            "PLLIR" => "3",
            "PM0" => "3",
            "PM1" => "3",
            "PM2" => "3",
            "PM3" => "3",
            "PONR" => "3",
            "POUT0" => "3",
            "POUT1" => "3",
            "POUT2" => "3",
            "POUT3" => "3",
            "PRTFLT" => "3",
            "PS2" => "3",
            "PS3" => "3",
            "PTI0" => "3",
            "PTI1" => "3",
            "PTI2" => "3",
            "PTI3" => "3",
            "PTR0" => "3",
            "PTR1" => "3",
            "PTR2" => "3",
            "PTR3" => "3",
            "PWMDIS" => "3",
            "PWMIE" => "3",
            "PWMIR" => "3",
            "RCS" => "3",
            "RDYEN0" => "3",
            "RDYEN1" => "3",
            "RDYEN2" => "3",
            "RDYEN3" => "3",
            "RDYEN4" => "3",
            "ROMEN" => "3",
            "ROMS1" => "3",
            "RTCIE" => "3",
            "RTCIR" => "3",
            "RWDC0" => "3",
            "RWDC1" => "3",
            "RWDC2" => "3",
            "RWDC3" => "3",
            "RWDC4" => "3",
            "RXD0" => "3",
            "S0BRS" => "3",
            "S0EIE" => "3",
            "S0EIR" => "3",
            "S0FE" => "3",
            "S0FEN" => "3",
            "S0LB" => "3",
            "S0ODD" => "3",
            "S0OE" => "3",
            "S0OEN" => "3",
            "S0PE" => "3",
            "S0PEN" => "3",
            "S0R" => "3",
            "S0REN" => "3",
            "S0RIE" => "3",
            "S0RIR" => "3",
            "S0STP" => "3",
            "S0TBIE" => "3",
            "S0TBIR" => "3",
            "S0TIE" => "3",
            "S0TIR" => "3",
            "SCLK" => "3",
            "SCS" => "3",
            "SGTDIS" => "3",
            "SHWR" => "3",
            "SSCAREN" => "3",
            "SSCBEN" => "3",
            "SSCDIS" => "3",
            "SSCEIE" => "3",
            "SSCEIR" => "3",
            "SSCEN" => "3",
            "SSCHB" => "3",
            "SSCMS" => "3",
            "SSCPEN" => "3",
            "SSCPH" => "3",
            "SSCPO" => "3",
            "SSCREN" => "3",
            "SSCRIE" => "3",
            "SSCRIR" => "3",
            "SSCTEN" => "3",
            "SSCTIE" => "3",
            "SSCTIR" => "3",
            "STKOF" => "3",
            "STKUF" => "3",
            "SWR" => "3",
            "T0IE" => "3",
            "T0IN" => "3",
            "T0IR" => "3",
            "T0M" => "3",
            "T0R" => "3",
            "T1IE" => "3",
            "T1IR" => "3",
            "T1M" => "3",
            "T1R" => "3",
            "T2IE" => "3",
            "T2IN" => "3",
            "T2IR" => "3",
            "T2R" => "3",
            "T2UD" => "3",
            "T2UDE" => "3",
            "T3EUD" => "3",
            "T3IE" => "3",
            "T3IN" => "3",
            "T3IR" => "3",
            "T3OE" => "3",
            "T3OTL" => "3",
            "T3OUT" => "3",
            "T3R" => "3",
            "T3UD" => "3",
            "T3UDE" => "3",
            "T4IE" => "3",
            "T4IN" => "3",
            "T4IR" => "3",
            "T4R" => "3",
            "T4UD" => "3",
            "T4UDE" => "3",
            "T5CLR" => "3",
            "T5IE" => "3",
            "T5IR" => "3",
            "T5R" => "3",
            "T5SC" => "3",
            "T5UD" => "3",
            "T5UDE" => "3",
            "T6IE" => "3",
            "T6IR" => "3",
            "T6OE" => "3",
            "T6OTL" => "3",
            "T6OUT" => "3",
            "T6R" => "3",
            "T6SR" => "3",
            "T6UD" => "3",
            "T6UDE" => "3",
            "T7IE" => "3",
            "T7IR" => "3",
            "T7M" => "3",
            "T7R" => "3",
            "T8IE" => "3",
            "T8IR" => "3",
            "T8M" => "3",
            "T8R" => "3",
            "TXD0" => "3",
            "UNDOPC" => "3",
            "USR0" => "3",
            "V" => "3",
            "VIS" => "3",
            "WDTIN" => "3",
            "WDTR" => "3",
            "WRCFG" => "3",
            "XP0IE" => "3",
            "XP0IR" => "3",
            "XP1IE" => "3",
            "XP1IR" => "3",
            "XP2IE" => "3",
            "XP2IR" => "3",
            "XP3IE" => "3",
            "XP3IR" => "3",
            "XPEN" => "3",
            "Z" => "3",
            "$AB" => "4",
            "$ABSOLUTE" => "4",
            "$CA" => "4",
            "$CASE" => "4",
            "$CHECKCPU16" => "4",
            "$DA" => "4",
            "$DATE" => "4",
            "$DB" => "4",
            "$DEBUG" => "4",
            "$DEF" => "4",
            "$DEFINE" => "4",
            "$EJ" => "4",
            "$EJECT" => "4",
            "$EP" => "4",
            "$ERRORPRINT" => "4",
            "$EX" => "4",
            "$EXTEND" => "4",
            "$EXTINSTR" => "4",
            "$EXTMEM" => "4",
            "$EXTPEC" => "4",
            "$EXTSFR" => "4",
            "$EXTSSK" => "4",
            "$FL" => "4",
            "$FLOAT" => "4",
            "$GE" => "4",
            "$GEN" => "4",
            "$GENONLY" => "4",
            "$GO" => "4",
            "$HD" => "4",
            "$HEADER" => "4",
            "$IC" => "4",
            "$INCLUDE" => "4",
            "$LA" => "4",
            "$LC" => "4",
            "$LI" => "4",
            "$LINES" => "4",
            "$LIST" => "4",
            "$LISTALL" => "4",
            "$LN" => "4",
            "$LOCALS" => "4",
            "$M166" => "4",
            "$MD" => "4",
            "$MOD166" => "4",
            "$MODEL" => "4",
            "$NOAB" => "4",
            "$NOABSOLUTE" => "4",
            "$NOCA" => "4",
            "$NOCASE" => "4",
            "$NODB" => "4",
            "$NODEBUG" => "4",
            "$NOEP" => "4",
            "$NOERRORPRINT" => "4",
            "$NOEX" => "4",
            "$NOEXTEND" => "4",
            "$NOEXTINSTR" => "4",
            "$NOEXTMEM" => "4",
            "$NOEXTPEC" => "4",
            "$NOEXTSFR" => "4",
            "$NOEXTSSK" => "4",
            "$NOGE" => "4",
            "$NOGEN" => "4",
            "$NOHD" => "4",
            "$NOHEADER" => "4",
            "$NOLA" => "4",
            "$NOLC" => "4",
            "$NOLI" => "4",
            "$NOLINES" => "4",
            "$NOLIST" => "4",
            "$NOLISTALL" => "4",
            "$NOLN" => "4",
            "$NOLOCALS" => "4",
            "$NOM166" => "4",
            "$NOMOD166" => "4",
            "$NOOBJECT" => "4",
            "$NOOJ" => "4",
            "$NOOP" => "4",
            "$NOOPTIMIZE" => "4",
            "$NOPA" => "4",
            "$NOPAGING" => "4",
            "$NOPR" => "4",
            "$NOPRINT" => "4",
            "$NORC" => "4",
            "$NORETCHECK" => "4",
            "$NOSB" => "4",
            "$NOSEGMENTED" => "4",
            "$NOSG" => "4",
            "$NOSM" => "4",
            "$NOST" => "4",
            "$NOSTRICTTASK" => "4",
            "$NOSYMB" => "4",
            "$NOSYMBOLS" => "4",
            "$NOTY" => "4",
            "$NOTYPE" => "4",
            "$NOXF" => "4",
            "$NOXI" => "4",
            "$NOXM" => "4",
            "$NOXP" => "4",
            "$NOXR" => "4",
            "$NOXREF" => "4",
            "$NOXS" => "4",
            "$OBJECT" => "4",
            "$OJ" => "4",
            "$OP" => "4",
            "$OPTIMIZE" => "4",
            "$PA" => "4",
            "$PADGEWITH" => "4",
            "$PAGELENGTH" => "4",
            "$PAGEWITH" => "4",
            "$PAGING" => "4",
            "$PL" => "4",
            "$PR" => "4",
            "$PRINT" => "4",
            "$PW" => "4",
            "$RC" => "4",
            "$RE" => "4",
            "$RESTORE" => "4",
            "$RETCHECK" => "4",
            "$SA" => "4",
            "$SAVE" => "4",
            "$SB" => "4",
            "$SEGMENTED" => "4",
            "$SG" => "4",
            "$SM" => "4",
            "$SN" => "4",
            "$ST" => "4",
            "$STDNAMES" => "4",
            "$STRICTTASK" => "4",
            "$SYMB" => "4",
            "$SYMBOLS" => "4",
            "$TA" => "4",
            "$TABS" => "4",
            "$TITLE" => "4",
            "$TT" => "4",
            "$TY" => "4",
            "$TYPE" => "4",
            "$WA" => "4",
            "$WARNING" => "4",
            "$XF" => "4",
            "$XI" => "4",
            "$XM" => "4",
            "$XP" => "4",
            "$XR" => "4",
            "$XREF" => "4",
            "$XS" => "4",
            "@BREAK" => "4",
            "@*DEFINE" => "4",
            "@DEFINE" => "4",
            "@DEFINED" => "4",
            "@ELSE" => "4",
            "@ENDD" => "4",
            "@ENDI" => "4",
            "@ENDR" => "4",
            "@ENDW" => "4",
            "@EQS" => "4",
            "@EVAL" => "4",
            "@EXIT" => "4",
            "@GES" => "4",
            "@GTS" => "4",
            "@IF" => "4",
            "@IN" => "4",
            "@LEN" => "4",
            "@LES" => "4",
            "@LTS" => "4",
            "@MATCH" => "4",
            "@NES" => "4",
            "@OUT" => "4",
            "@REPEAT" => "4",
            "@SET" => "4",
            "@SUBSTR" => "4",
            "@WHILE" => "4",
            "LARGE" => "4",
            "MEDIUM" => "4",
            "NONE" => "4",
            "SMALL" => "4",
            "TINY" => "4",
            "#" => "5",
            "$" => "5",
            "&" => "5",
            "(" => "5",
            ")" => "5",
            "*" => "5",
            "+" => "5",
            "," => "5",
            "-" => "5",
            ":" => "5",
            "?" => "5",
            "@" => "5",
            "[" => "5",
            "]" => "5",
            "|" => "5",
            "ASSUME" => "6",
            "AT" => "6",
            "BIT" => "6",
            "BITADDRESSABLE" => "6",
            "BITWORD" => "6",
            "BYTE" => "6",
            "CGROUP" => "6",
            "CODE" => "6",
            "COMMON" => "6",
            "COMREG" => "6",
            "DATA" => "6",
            "DB" => "6",
            "DBIT" => "6",
            "DDW" => "6",
            "DEFA" => "6",
            "DEFB" => "6",
            "DEFR" => "6",
            "DGROUP" => "6",
            "DS" => "6",
            "DSB" => "6",
            "DSDW" => "6",
            "DSW" => "6",
            "DW" => "6",
            "DWORD" => "6",
            "END" => "6",
            "ENDP" => "6",
            "ENDS" => "6",
            "EQU" => "6",
            "EVEN" => "6",
            "EXTERN" => "6",
            "EXTRN" => "6",
            "FAR" => "6",
            "FILE" => "6",
            "GLBUSRSTACK" => "6",
            "GLOBAL" => "6",
            "HDAT" => "6",
            "INTNO" => "6",
            "IRAMADDRESSABLE" => "6",
            "LABEL" => "6",
            "LINE" => "6",
            "LIT" => "6",
            "NAME" => "6",
            "NEAR" => "6",
            "NOTHING" => "6",
            "ORG" => "6",
            "PDAT" => "6",
            "PECADDRESSABLE" => "6",
            "PECDEF" => "6",
            "PRIVATE" => "6",
            "PROC" => "6",
            "PUBLIC" => "6",
            "REGBANK" => "6",
            "REGDEF" => "6",
            "SECTION" => "6",
            "SEGMENT" => "6",
            "SET" => "6",
            "SSKDEF" => "6",
            "SYMB" => "6",
            "SYSSTACK" => "6",
            "SYSTEM" => "6",
            "TASK" => "6",
            "TYPEDEC" => "6",
            "USRSTACK" => "6",
            "WORD" => "6",
            "BOF" => "7",
            "EQ" => "7",
            "GE" => "7",
            "GT" => "7",
            "HIGH" => "7",
            "LE" => "7",
            "LOW" => "7",
            "LT" => "7",
            "MOD" => "7",
            "NE" => "7",
            "NOT" => "7",
            "PAG" => "7",
            "POF" => "7",
            "SEG" => "7",
            "SHORT" => "7",
            "SOF" => "7",
            "UGE" => "7",
            "UGT" => "7",
            "ULE" => "7",
            "ULT" => "7",
            "cc_C" => "8",
            "cc_EQ" => "8",
            "cc_N" => "8",
            "cc_NC" => "8",
            "cc_NE" => "8",
            "cc_NET" => "8",
            "cc_NN" => "8",
            "cc_NV" => "8",
            "cc_NZ" => "8",
            "cc_SGE" => "8",
            "cc_SGT" => "8",
            "cc_SLE" => "8",
            "cc_UC" => "8",
            "cc_UGE" => "8",
            "cc_UGT" => "8",
            "cc_ULE" => "8",
            "cc_ULT" => "8",
            "cc_V" => "8",
            "cc_Z" => "8");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "7" => "donothing",
            "2" => "donothing",
            "3" => "donothing",
            "4" => "donothing",
            "5" => "donothing",
            "6" => "donothing",
            "8" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }
