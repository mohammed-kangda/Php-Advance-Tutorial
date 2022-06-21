<!-- 
    
    if we want create file(any format) on the server , then file system 
    functions are used.

    File System Functions Facilities:

    create files & folders
    Read Files
    Get File Information
    Change Permission


    BASIC FILE OPTIONS:


    readfile() -> read file & show file bites

    file_exists() -> check weather file exists

    copy() -> clone existing file content into new file

    rename() -> used to rename

    delete() -> delete file

    unlink() -> delete file(same as delete)

    mkdir() -> used to create folder

    rmdir() -> used to remove folder

    fileize() -> show file size in bytes

    filetype() -> show file type

    realpath() -> show full proper path

    pathinfo(filename,mult.types) -> show path info in array form
                     (PATHINFO_DIRNAME, PATHINFO_BASENAME,PATHINFO_EXTENSION,PATHINFO_FILENAME)

    basename(filename,what to remove eg: .txt) -> gives filename

    dirname(filename,levels) -> return parent directory

    fwrite()


    ADVANCE FILE FUNCTIONS:

    MODE:

    r = read only
    r+ = read/write  & delete old content & come at deleted place
    w  = write only
    w+ = read/write & delete whole old content & add new content
    a = read
    a+ = read/write & add content at the last (append 1 time only)


    fopen(filename,mode) -> open file

    fread(filename,how many char) -> read file

    fgets() -> read content of file line by line

    ftell() -> show cursor position

    fseek() -> used to change cursor position

    fgetc() -> read file content word by word

    file() -> converts line of file content into array

    fwrite() -> used to write content in file

    fputs() -> same as fwrite

    ftruncate() -> show selected content from file 

    fclose() -> close file


-->

<?php


    # == #
    echo "<h2>readfile()</h2><br>";
    
    echo readfile('readme.txt');

    # == #
    echo "<h2>file_exists()</h2><br>";

    $file = 'readme.txt';

    if(file_exists($file)){
        echo readfile('readme.txt');
    }else{
        echo "File Doesn't Exists";
    }


    # == #
    echo "<h2>copy()</h2><br>";

    echo copy($file,'newFile.txt');



    # == #
    echo "<h2>rename()</h2><br>";

    echo rename('newFile.txt','changeFile.txt');



    # == #
    echo "<h2>unlink()</h2><br>";

    echo unlink('unlink.txt');



    # == #
    echo "<h2>delete()</h2><br>";

    echo unlink('delete.txt');



    # == #
    echo "<h2>mkdir()</h2><br>";

    if(file_exists('mkDir')){
        echo "Folder Already Exists";
    }else{
        echo mkdir('mkDir');
    }


    # == #
    echo "<h2>rmdir()</h2><br>";

    if(file_exists('mkDir')){
        echo rmdir('mkDir');
    }else{
        echo "Folder Doesn't Exist";
    }
 


    # == #
    echo "<h2>filesize()</h2><br>";

    echo filesize('readme.txt');


    # == #
    echo "<h2>filetype()</h2><br>";

    echo filetype('readme.txt');


    # == #
    echo "<h2>realpath()</h2><br>";

    echo realpath('readme.txt');


    # == #
    echo "<h2>pathinfo()</h2><br>";

    $filepath = realpath('readme.txt');
    echo "<pre>";
    print_r(pathinfo($filepath));
    echo "</pre>";


    # == #
    echo "<h2>basename()</h2><br>";

    echo basename('index.php','.php');


    # == #
    echo "<h2>dirname()</h2><br>";

    echo dirname($filepath,1);



    # == #
    echo "<h2>fopen()</h2><br>";

    $fileName = fopen('readme.txt','r');


    # == #
    // echo "<h2>fread()</h2><br>";

    // echo fread($fileName,filesize('readme.txt'));


    # == #
    echo "<h2>fgets()</h2><br>";

    echo fgets($fileName);
    // echo ftell($fileName);
    echo fgets($fileName);
    // echo ftell($fileName);
    // fseek($fileName,17);
    echo "<br>";
    echo fgets($fileName);

    
    
    // # == #
    // echo "<h2>ftell()</h2><br>";
    
    // echo ftell($fileName);


    // # == #
    // echo "<h2>fseek()</h2><br>";

    // echo fseek($fileName,37);


    # == #
    echo "<h2>fgetc</h2><br>";
    
    $a = fgetc($fileName);
    $b = fgetc($fileName);
    $c = fgetc($fileName);
   
    echo $a;
    echo $b;
    echo $c;


    # == #
    echo "<h2>file</h2><br>";
    echo "<pre>";
    print_r(file('readme.txt')); # only string format file name
    echo "<p/>re>";


    # == #
    echo "<h2>file 'w' mode</h2><br>";
    $fileMode = fopen('readme.txt','r+');
    fwrite($fileMode,'Some new content');


    # == #
    echo "<h2>file 'w+' mode</h2><br>";
    $fileMode = fopen('readme.txt','w+');
    fwrite($fileMode,'Some new content');

    # == #
    echo "<h2>file 'a+' mode</h2><br>";
    $fileMode = fopen('readme.txt','a+');
    fwrite($fileMode,' Some appended content');

    
    # == #
    echo "<h2>ftruncate()</h2><br>";
    ftruncate($fileMode,10);


    # == #
    echo "<h2>fclose()</h2><br>";
    fclose($file);

?>