 //ע��

FCKCommands.RegisterCommand('swfupload', new FCKDialogCommand('swfupload', FCKLang.swfuploadDlgTitle, FCKPlugins.Items['swfupload'].Path + "swfupload.php", 600, 400));

 //���幤����

var oSwfuploadItem = new FCKToolbarButton('swfupload', FCKLang.swfupload);

oSwfuploadItem.IconPath = FCKPlugins.Items['swfupload'].Path + 'images/image_upload.gif';

 //ע��

 FCKToolbarItems.RegisterItem('swfupload', oSwfuploadItem);


