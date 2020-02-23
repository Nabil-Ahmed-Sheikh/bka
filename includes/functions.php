<?php

function time_eng_to_bengali($time='')
{

  $dayArr = array('Sun'=>'রবি','Mon'=>'সোম','Tue'=>'মঙ্গল','Wed'=>'বুধ','Thu'=>'বৃহ','Fri'=>'শুক্র','Sat'=>'শনি');
  $monthArr = array('জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','অগাস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর');
  $date = eng_to_bengali(substr($time,8,2));
  $month = $monthArr[(int)(substr($time,5,2))-1];
  $day = $dayArr[date('D',strtotime($time))];


  if((int)(substr($time,11,2)) > 12 ){
    $hour = eng_to_bengali(strval((int)(substr($time,11,2))-12));
  } else {
    $hour = eng_to_bengali(strval((int)(substr($time,11,2))));
  }


  if((int)(substr($time,11,2)) >= 12 && (int)(substr($time,11,2)) < 15 ){
    $noon = 'দুপুর';
  } elseif ((int)(substr($time,11,2)) >= 15 && (int)(substr($time,11,2)) < 18 ) {
    $noon = 'বিকেল';
  } elseif ((int)(substr($time,11,2)) >= 18) {
    $noon = 'রাত';
  } else {
    $noon = 'সকাল';
  }


  $min = eng_to_bengali(substr($time,14,2));


  $str = $date . ' ' . $month . ', ' . $day . ', '. $noon . ' ' . $hour . ':' . $min . 'টা';
  return $str;
}

function eng_to_bengali($str='')
{
  $numbers = array('0' =>'০' ,'1' =>'১' ,'2' =>'২' ,'3' =>'৩' ,'4' =>'৪' ,'5' =>'৫' ,'6' =>'৬' ,'7' =>'৭' ,'8' =>'৮' ,'9' =>'৯');
  $arr = str_split($str);
  $return_str = "";
  for($i = 0; $i < count($arr); $i++){
    $return_str .= $numbers[$arr[$i]];
  }
  return $return_str;
}



function time_eng_to_arabic($time='')
{

  $dayArr = array('Sun'=>'الاحد','Mon'=>'الاثنين','Tue'=>'الثلاثاء','Wed'=>'الاربعاء','Thu'=>'الخميس','Fri'=>'الجمعة','Sat'=>'السبت');
  $monthArr = array('يناير','فبراير','مارس','أبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر');
  $date = eng_to_arabic(substr($time,8,2));
  $month = $monthArr[(int)(substr($time,5,2))-1];
  $day = $dayArr[date('D',strtotime($time))];


  if((int)(substr($time,11,2)) > 12 ){
    $hour = eng_to_arabic(strval((int)(substr($time,11,2))-12));
  } else {
    $hour = eng_to_arabic(strval((int)(substr($time,11,2))));
  }





  $min = eng_to_arabic(substr($time,14,2));


  $str = $hour . ':' . $min . ' || ' . $day . ' || ' . $date . ' ' . $month ;
  return $str;
}



function eng_to_arabic($str='')
{
  $numbers = array('0' =>'٠' ,'1' =>'١' ,'2' =>'٢' ,'3' =>'٣' ,'4' =>'٤' ,'5' =>'٥' ,'6' =>'٦' ,'7' =>'٧' ,'8' =>'٨' ,'9' =>'٩');
  $arr = str_split($str);
  $return_str = "";
  for($i = 0; $i < count($arr); $i++){
    $return_str .= $numbers[$arr[$i]];
  }
  return $return_str;
}



function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) {
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name){
	$classd_name = strtolower($class_name);
	$path = LIB_PATH.DS."/{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	} else {
		die("The file {$class_name}.php could not be found");
	}

}

function include_layout_template($template=""){
  include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);

}


function log_action($action, $message="") {
  $logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';

  if($handle = fopen("$logfile", "a")) { //append
    $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
    $content = "{$timestamp} | {$action}: {$message}\r\n";
    fwrite($handle, $content);
    fclose($handle);

  } else {
    echo "Could not open log file for writing.";
  }
}

function datetime_to_text($datetime="") {
  $unixdatetime = strtotime($datetime);
  return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}

?>
