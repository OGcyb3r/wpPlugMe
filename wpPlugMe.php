<?php
$headerz = "\033[1;38;5;110m
:::==== :::  === :::==== :::===  :::  === :::=======
:::==== :::  === :::====  \033[1;38;5;109m   === :::  === ::: === ===
  ===   ========  \033[1;38;5;108m ===    =====  ======== === === ===
  ===        ===   ===    \033[1;38;5;105m   ===      === ===     ===
  ===        ===   ===   ======       === ===     ===\033[0m
";
system("clear");
echo $headerz;
print "\033[1;38;5;197m
  WPplugMe\033[0m :-X
\033[1;38;5;255m

\033[30;38;5;255m[\033[0m \033[1;38;5;119m1\033[0m\033[30;38;5;255m ]::\033[30;38;5;75mScan\033[0m::=> https://www.target.com \033[0m
\033[30;38;5;255m[\033[0m \033[1;38;5;119m2\033[0m\033[30;38;5;255m ]::\033[30;38;5;73mScan\033[0m::=> \033[1;38;5;226mwebsites.txt\033[0m

";
YourNumberIs : print "\n\033[30;38;5;248m[ + ]\033[30;38;5;145m Enter a number :_ \033[0m";
$TheNumberis = trim(fgets(STDIN,1024));
if($TheNumberis == 2){
print "\033[30;38;5;255m[ \033[30;38;5;119m+\033[30;38;5;255m ]\033[30;38;5;189m Enter the list of websites,\033[1;38;5;189m now\033[0m\033[30;38;5;189m:_ \033[0m";
$target = fgets(STDIN,1024);
$target = trim($target);
system("clear");
$contentS = file_get_contents("$target");
$exp = explode("\n",$contentS);
$plugins = file_get_contents("inc/plugsname.txt");
$explode = explode("\n",$plugins);
$counter1 = count($exp);
$counter2 = count($explode);

print "\033[30;38;5;255m
_______________:: \033[1;38;5;189m".date("D, d M Y H:i:s O")."\033[0m ::_______________
|
|     [ \033[30;38;5;187m+\033[0m ] Scanning :\033[1;38;5;136m $counter1 websites  \033[0m
|     [ \033[30;38;5;187m+\033[0m ] saving file on :\033[1;38;5;136mresult/result_list.txt\033[0m
|     [ \033[30;38;5;187m+\033[0m ] found \033[1;38;5;136m$counter2\033[0m plugins on \033[1;38;5;136minc/plugsname.txt\033[0m
_____________________________________________
Starting.... \n
";
for($x=0;$x<$counter1;$x++){
$exp[$x] = trim($exp[$x]);
	for($z=0;$z<$counter2;$z++){
$explode[$x] = trim($explode[$x]);
$h = $exp[$x]."/wp-content/plugins/".$explode[$z];
$srs = @file_get_contents("$h");
if(@preg_match("/readme/",$srs)){
$r = @fopen("result/result_list.txt","a+");
@fwrite($r,$h);
@fwrite($r,"\n");
print "\033[1;38;5;189m[\033[0m\033[1;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;119m ✔ \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;189m $h\033[0m\n";
}elseif(@preg_match("/Directory/",$srs)){
$r = @fopen("result/result_list.txt","a+");
@fwrite($r,$h);
@fwrite($r,"\n");
print "\033[1;38;5;189m[\033[0m\033[1;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;119m ✔ \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;189m $h\033[0m\n";
}elseif(@preg_match("/Index of/",$srs)){
$r = @fopen("result/result_list.txt","a+");
@fwrite($r,$h);
@fwrite($r,"\n");
print "\033[1;38;5;189m[\033[0m\033[1;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;119m ✔ \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;189m $h\033[0m\n";
}
#####################
# TURN OFF THE -V by added #
#
else{print "\033[1;38;5;189m[\033[0m\033[30;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;160m x \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;237m $h\033[0m\n";}
#
#####################
}

}



}


elseif($TheNumberis == 1){

print "\033[30;38;5;255m[ \033[30;38;5;119m+\033[30;38;5;255m ]\033[30;38;5;189m Enter the target website,\033[1;38;5;189m now\033[0m\033[30;38;5;189m:_ \033[0m";
$target = fgets(STDIN,1024);
$target = trim($target);
system("clear");
$plugins = @file_get_contents("inc/plugsname.txt");
$explode = @explode("\n",$plugins);
$explode = @array_unique($explode);
$counter2 = count($explode);
print "\033[30;38;5;255m
_______________:: \033[1;38;5;189m".date("D, d M Y H:i:s O")."\033[0m ::_______________
|
|     [ \033[30;38;5;187m+\033[0m ] target : \033[1;38;5;136m$target\033[0m
|     [ \033[30;38;5;187m+\033[0m ] saving file on :\033[1;38;5;136mresult/result.txt\033[0m
|     [ \033[30;38;5;187m+\033[0m ] found \033[1;38;5;136m$counter2\033[0m plugins on \033[1;38;5;136minc/plugsname.txt\033[0m
_____________________________________________
Starting.... \n
";
for($x=0;$x<$counter2;$x++){
$explode[$x] = @trim($explode[$x]);
$h = $target."/wp-content/plugins/".$explode[$x];
$srs = @file_get_contents("$h");
if(@preg_match("/readme/",$srs)){
$r = @fopen("result/result.txt","a+");
@fwrite($r,$h);
@fwrite($r,"\n");
print "\033[1;38;5;189m[\033[0m\033[1;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;119m ✔ \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;189m $h\033[0m\n";
}elseif(@preg_match("/Directory/",$srs)){
$r = @fopen("result/result.txt","a+");
@fwrite($r,$h);
@fwrite($r,"\n");
print "\033[1;38;5;189m[\033[0m\033[1;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;119m ✔ \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;189m $h\033[0m\n";
}elseif(@preg_match("/Index of/",$srs)){
$r = @fopen("result/result.txt","a+");
@fwrite($r,$h);
@fwrite($r,"\n");
print "\033[1;38;5;189m[\033[0m\033[1;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;119m ✔ \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;189m $h\033[0m\n";
}
#####################
# TURN OFF THE -V by added #
#
else{print "\033[1;38;5;189m[\033[0m\033[30;38;5;38m".date("h:m:s")."\033[0m\033[1;38;5;189m]\033[0m \033[1;38;5;189m[\033[0m\033[1;38;5;160m x \033[0m\033[0m\033[1;38;5;189m]\033[0m\033[1;38;5;237m $h\033[0m\n";}
#
#####################
}


}

else{
print "\033[30;38;5;160m::Wrong number..\033[0m";
goto YourNumberIs;
}




?>
