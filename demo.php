<?php
echo "Hii";
header("content-type: text/html; charset=UTF-8"); 
$data=file_get_contents('../Panchtantra.txt');
   
//echo $data;


file_put_contents('newFile.txt',
    trim(preg_replace(
        '/[\n\r\s]+/',
        " ",
        file_get_contents('../Panchtantra.txt')
    ))
);

/*trim(preg_replace('/[\t\n\r\s]+/', ' ', $text_to_clean_up))
file_put_contents(
  "new_file.txt",
  implode(
    "", 
    file('../Panchtantra.txt', FILE_SKIP_EMPTY_LINES))
);*/
?>