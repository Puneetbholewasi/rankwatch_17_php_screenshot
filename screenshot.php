<? php

 $Browser = new COM('GoogleChrome.Application');
 $Browserhandle = $Browser->HWND;
 $Browser->Visible = true;
 $Browser->Fullscreen = true;
 $Browser->Navigate('http://www.github.com');
 $img = imagegrabwindow($Browserhandle, 0);
 $Browser->Quit();
imagepng($img, 'screenshot.png');
?>