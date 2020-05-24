<?php

  ini_set('memory_limit', '1024M'); // or you could use 1G
  ini_set('max_execution_time', 300);

  // https://stackoverflow.com/a/26551445
  function get_cpu_usage(){
    $loads = sys_getloadavg();
    $core_nums = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
    $load = round($loads[0]/($core_nums + 1)*100, 2);
    return $load;
  }

  function get_number(){

      $str="";
      for($j = 0; $j < pow(10,7); $j++){
        $str.=strval(rand(0,getrandmax()));
      }

      return hash('sha512',$str);
  }

//  if(!isset($_GET["number_of_values"]) || !is_numeric($_GET["number_of_values"])){
//    die("No number given!");
//  }

//  echo "{";

//  for($i = 0; $i < intval($_GET["number_of_values"]); $i++){
    echo('{ "number":"'.get_number().'", "host":"'.gethostname().'", "cpu":"'.get_cpu_usage().'" }');
//    if($i != (intval($_GET["number_of_values"])-1)){
//      echo ",";
//    }
//  }
//  echo "}";

?>
