<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_lpc extends HFile
  {
      public function HFile_lpc()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // LPC
          /*************************************/
          // Flags

          $this->nocase            	= "0";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "gray");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array("{");
          $this->unindent          	= array("}");

          // String characters and delimiters

          $this->stringchars       	= array("\"");
          $this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "[", "]", "{", "}", "-", "+", "=", "|", "\\", "/", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array("//");
          $this->blockcommenton    	= array("/*");
          $this->blockcommentoff   	= array("*/");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "array" => "1",
            "class" => "1",
            "double" => "1",
            "float" => "1",
            "function" => "1",
            "int" => "1",
            "mixed" => "1",
            "mapping" => "1",
            "nomask" => "1",
            "object" => "1",
            "public" => "1",
            "private" => "1",
            "static" => "1",
            "string" => "1",
            "void" => "1",
            "varargs" => "1",
            "break" => "2",
            "case" => "2",
            "continue" => "2",
            "default" => "2",
            "do" => "2",
            "else" => "2",
            "for" => "2",
            "foreach" => "2",
            "if" => "2",
            "in" => "2",
            "return" => "2",
            "switch" => "2",
            "while" => "2",
            "abs" => "3",
            "absolute_path" => "3",
            "adlog_file" => "3",
            "adminlist" => "3",
            "adminp" => "3",
            "arch" => "3",
            "assure_save_dir" => "3",
            "assure_user_save_dir" => "3",
            "base_name" => "3",
            "cat" => "3",
            "clone_object" => "4",
            "creator_file" => "3",
            "data_dir" => "3",
            "data_file" => "3",
            "debug_info" => "4",
            "directory_exists" => "3",
            "exclude_array" => "3",
            "exclude_element" => "3",
            "exec" => "3",
            "expand" => "3",
            "export_uid" => "4",
            "extract" => "3",
            "file_exists" => "3",
            "filter" => "4",
            "find_items" => "3",
            "find_short" => "3",
            "first_inventory" => "3",
            "format_string" => "3",
            "format_time" => "3",
            "get_logdir" => "3",
            "get_logdir_logname" => "3",
            "get_logfile" => "3",
            "get_object" => "3",
            "get_objects" => "3",
            "getoid" => "3",
            "gettype" => "3",
            "hiddenp" => "3",
            "identify" => "3",
            "int_string" => "3",
            "intl_date_stamp" => "3",
            "log_file" => "3",
            "max" => "3",
            "maxelt" => "3",
            "min" => "3",
            "minelt" => "3",
            "mkdirs" => "3",
            "mud_name" => "3",
            "mud_port" => "3",
            "mudlib_name" => "3",
            "mudlib_version" => "3",
            "next_inventory" => "3",
            "objective" => "3",
            "possessive" => "3",
            "ppossessive" => "3",
            "previous_living" => "3",
            "process_string" => "3",
            "process_value" => "3",
            "query_snoop" => "3",
            "query_snooping" => "3",
            "reduce_to_tilde_path" => "3",
            "seniorlist" => "3",
            "seniorp" => "3",
            "set_default_fail_msg" => "3",
            "set_eval_limit" => "4",
            "shadowp" => "3",
            "shutdown" => "3",
            "snoop" => "3",
            "sorted_inventory" => "3",
            "strtype" => "3",
            "subjective" => "3",
            "sumofarr" => "3",
            "tail" => "3",
            "temp_file" => "3",
            "testcharp" => "3",
            "transfer" => "3",
            "trim_spaces" => "3",
            "trimpath" => "3",
            "uniq_array" => "3",
            "update_file" => "3",
            "user_data_dir" => "3",
            "user_data_file" => "3",
            "user_path" => "3",
            "userp" => "3",
            "version" => "3",
            "wizardp" => "3",
            "wrap" => "3",
            "write_log_file" => "3",
            "allocate" => "4",
            "allocate_buffer" => "4",
            "acos" => "4",
            "asin" => "4",
            "atan" => "4",
            "add_action" => "4",
            "allocate_mapping" => "4",
            "arrayp" => "4",
            "author_stats" => "4",
            "all_inventory" => "4",
            "all_previous_objects" => "4",
            "bind" => "4",
            "bufferp" => "4",
            "crc32" => "4",
            "call_other" => "4",
            "call_out" => "4",
            "call_stack" => "4",
            "catch" => "4",
            "cp" => "4",
            "ceil" => "4",
            "cos" => "4",
            "copy" => "4",
            "command" => "4",
            "commands" => "4",
            "cache_stats" => "4",
            "classp" => "4",
            "children" => "4",
            "clonep" => "4",
            "capitalize" => "4",
            "clear_bit" => "4",
            "crypt" => "4",
            "call_out_info" => "4",
            "check_memory" => "4",
            "ctime" => "4",
            "disable_commands" => "4",
            "disable_wizard" => "4",
            "debugmalloc" => "4",
            "dump_file_descriptors" => "4",
            "dump_prog" => "4",
            "dump_socket_status" => "4",
            "dumpallobj" => "4",
            "domain_stats" => "4",
            "deep_inventory" => "4",
            "destruct" => "4",
            "deep_inherit_list" => "4",
            "evaluate" => "4",
            "exp" => "4",
            "ed" => "4",
            "ed_cmd" => "4",
            "ed_start" => "4",
            "enable_commands" => "4",
            "enable_wizard" => "4",
            "environment" => "4",
            "explode" => "4",
            "error" => "4",
            "eval_cost" => "4",
            "external_start" => "4",
            "filter_array" => "4",
            "file_length" => "4",
            "file_name" => "4",
            "file_size" => "4",
            "floor" => "4",
            "function_owner" => "4",
            "fetch_variable" => "4",
            "find_player" => "4",
            "filter_mapping" => "4",
            "floatp" => "4",
            "functionp" => "4",
            "find_living" => "4",
            "find_object" => "4",
            "find_call_out" => "4",
            "flush_messages" => "4",
            "function_exists" => "4",
            "function_profile" => "4",
            "functions" => "4",
            "generate_source" => "4",
            "get_dir" => "4",
            "get_char" => "4",
            "get_config" => "4",
            "geteuid" => "4",
            "getuid" => "4",
            "heart_beat_info" => "4",
            "heart_beats" => "4",
            "in_edit" => "4",
            "in_input" => "4",
            "input_to" => "4",
            "interactive" => "4",
            "intp" => "4",
            "implode" => "4",
            "inherit_list" => "4",
            "inherits" => "4",
            "keys" => "4",
            "link" => "4",
            "log" => "4",
            "living" => "4",
            "livings" => "4",
            "load_object" => "4",
            "lower_case" => "4",
            "localtime" => "4",
            "lpc_info" => "4",
            "map_array" => "4",
            "member_array" => "4",
            "mkdir" => "4",
            "map" => "4",
            "message" => "4",
            "malloc_status" => "4",
            "memory_info" => "4",
            "mud_status" => "4",
            "map_delete" => "4",
            "map_mapping" => "4",
            "match_path" => "4",
            "mapp" => "4",
            "master" => "4",
            "move_object" => "4",
            "max_eval_cost" => "4",
            "memory_summary" => "4",
            "new" => "4",
            "notify_fail" => "4",
            "named_livings" => "4",
            "origin" => "4",
            "opcprof" => "4",
            "objectp" => "4",
            "objects" => "4",
            "previous_object" => "4",
            "pow" => "4",
            "printf" => "4",
            "pointerp" => "4",
            "present" => "4",
            "pluralize" => "4",
            "program_info" => "4",
            "query_shadowing" => "4",
            "query_ed_mode" => "4",
            "query_host_name" => "4",
            "query_idle" => "4",
            "query_ip_name" => "4",
            "query_ip_number" => "4",
            "query_ip_port" => "4",
            "query_notify_fail" => "4",
            "query_verb" => "4",
            "query_load_average" => "4",
            "query_privs" => "4",
            "query_heart_beat" => "4",
            "read_buffer" => "4",
            "remove_call_out" => "4",
            "remove_shadow" => "4",
            "read_bytes" => "4",
            "read_file" => "4",
            "rename" => "4",
            "rm" => "4",
            "rmdir" => "4",
            "restore_variable" => "4",
            "receive" => "4",
            "remove_action" => "4",
            "remove_interactive" => "4",
            "resolve" => "4",
            "refs" => "4",
            "rusage" => "4",
            "random" => "4",
            "reload_object" => "4",
            "restore_object" => "4",
            "reg_assoc" => "4",
            "regexp" => "4",
            "repeat_string" => "4",
            "replace_string" => "4",
            "reclaim_objects" => "4",
            "replace_program" => "4",
            "replaceable" => "4",
            "reset_eval_cost" => "4",
            "sort_array" => "4",
            "shadow" => "4",
            "stat" => "4",
            "sin" => "4",
            "sqrt" => "4",
            "save_variable" => "4",
            "sizeof" => "4",
            "store_variable" => "4",
            "say" => "4",
            "set_this_player" => "4",
            "shout" => "4",
            "set_debug_level" => "4",
            "set_malloc_mask" => "4",
            "swap" => "4",
            "stringp" => "4",
            "set_author" => "4",
            "set_light" => "4",
            "set_living_name" => "4",
            "set_privs" => "4",
            "seteuid" => "4",
            "save_object" => "4",
            "set_heart_beat" => "4",
            "set_hide" => "4",
            "socket_accept" => "4",
            "socket_acquire" => "4",
            "socket_address" => "4",
            "socket_bind" => "4",
            "socket_close" => "4",
            "socket_create" => "4",
            "socket_error" => "4",
            "socket_listen" => "4",
            "socket_release" => "4",
            "socket_write" => "4",
            "set_bit" => "4",
            "sprintf" => "4",
            "sscanf" => "4",
            "strcmp" => "4",
            "strlen" => "4",
            "strsrch" => "4",
            "set_reset" => "4",
            "shallow_inherit_list" => "4",
            "this_object" => "4",
            "throw" => "4",
            "tan" => "4",
            "to_float" => "4",
            "to_int" => "4",
            "typeof" => "4",
            "this_interactive" => "4",
            "this_player" => "4",
            "this_user" => "4",
            "time_expression" => "4",
            "trace" => "4",
            "traceprefix" => "4",
            "tell_object" => "4",
            "tell_room" => "4",
            "terminal_colour" => "4",
            "test_bit" => "4",
            "time" => "4",
            "unique_array" => "4",
            "users" => "4",
            "unique_mapping" => "4",
            "undefinedp" => "4",
            "upper_case" => "4",
            "uptime" => "4",
            "values" => "4",
            "virtualp" => "4",
            "variables" => "4",
            "write_buffer" => "4",
            "write_bytes" => "4",
            "write_file" => "4",
            "write" => "4",
            "inherit" => "5",
            "#define" => "5",
            "#include" => "5",
            "#if" => "5",
            "#else" => "5",
            "#ifdef" => "5",
            "#pragma" => "5",
            "#endif" => "5",
            "#ifndef" => "5",
            "#undef//" => "5",
            "{" => "6",
            "}" => "6",
            "attack" => "7",
            "add_boost" => "7",
            "add_hp" => "7",
            "add_sp" => "7",
            "add_money" => "7",
            "add_extra_attack" => "7",
            "add_name" => "7",
            "create" => "7",
            "clear_opponents" => "7",
            "do_command" => "7",
            "evade_attack" => "7",
            "get_weapon" => "7",
            "heart_beat" => "7",
            "hit_player" => "7",
            "hold_attack" => "7",
            "init" => "7",
            "load_chat" => "7",
            "load_a_chat" => "7",
            "move_living" => "7",
            "move" => "7",
            "move_or_destruct" => "7",
            "notify_died" => "7",
            "notify_killed" => "7",
            "notify_softkilled" => "7",
            "notify_got_hit" => "7",
            "notify_sold" => "7",
            "notify_softdied" => "7",
            "notify_moved" => "7",
            "query_guild_data" => "7",
            "query_objective" => "7",
            "query_opponents" => "7",
            "query_possessive" => "7",
            "query_name" => "7",
            "query_pronoun" => "7",
            "query_short" => "7",
            "query_long" => "7",
            "query_fightable" => "7",
            "query_use" => "7",
            "query_ac" => "7",
            "query_sc" => "7",
            "query_wc" => "7",
            "query_hp" => "7",
            "query_sp" => "7",
            "query_no_get" => "7",
            "query_no_drop" => "7",
            "query_opponent" => "7",
            "query_npc" => "7",
            "query_living" => "7",
            "query_vis" => "7",
            "query_value" => "7",
            "query_light" => "7",
            "query_total_boost" => "7",
            "query_origin" => "7",
            "query_level" => "7",
            "query_str" => "7",
            "query_dex" => "7",
            "query_con" => "7",
            "query_int" => "7",
            "query_wis" => "7",
            "query_cha" => "7",
            "query_protection" => "7",
            "query_location" => "7",
            "remove_object" => "7",
            "receive_object" => "7",
            "remove_item_boost" => "7",
            "reset" => "7",
            "remove_boost" => "7",
            "remove_extra_short" => "7",
            "register_notify" => "7",
            "register_prevent" => "7",
            "release_object" => "7",
            "set_ac" => "7",
            "set_al" => "7",
            "set_gender" => "7",
            "set_guild_data" => "7",
            "set_female" => "7",
            "set_male" => "7",
            "set_name" => "7",
            "set_neuter" => "7",
            "set_race" => "7",
            "set_sc" => "7",
            "set_stats" => "7",
            "set_value" => "7",
            "set_wc" => "7",
            "set_weight" => "7",
            "set_type" => "7",
            "set_long" => "7",
            "set_short" => "7",
            "set_softkill" => "7",
            "set_fightable_msg" => "7",
            "set_weapon" => "7",
            "set_locations" => "7",
            "set_location_prob" => "7",
            "spell_player" => "7",
            "stop_attack" => "7",
            "start_attack" => "7",
            "start_attack_allowed" => "7",
            "set_immunity" => "7",
            "set_humanoid" => "7",
            "set_aggressive" => "7",
            "second_life" => "7",
            "set_property" => "7",
            "set_no_drop" => "7",
            "set_no_get" => "7",
            "unregister_notify" => "7",
            "unregister_prevent" => "7");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "2" => "donothing",
            "3" => "donothing",
            "4" => "donothing",
            "5" => "donothing",
            "6" => "donothing",
            "7" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }
