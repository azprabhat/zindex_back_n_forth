<?php
	function delDir($dir){
        if(is_dir($dir) == TRUE)
        {
            $rootFolder = scandir($dir);
            if(sizeof($rootFolder) > 2)
            {
                foreach($rootFolder as $folder)
                {
                    if($folder != "." && $folder != "..")
                    {
                        delDir($dir."/".$folder);
                    }
                }
                rmdir($dir);
            }
        }
        else
        {
            if(file_exists($dir) == TRUE)
            {
                unlink($dir);
            }
        }
    }
?>