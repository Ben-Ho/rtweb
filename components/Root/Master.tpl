<!DOCTYPE html>
<html lang="<?=$this->pageLanguage?>">
    <head>
        <?=$this->includeCode('header')?>
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+English:400,400italic' rel='stylesheet' type='text/css'>
    </head>
    <body class="<?=$this->rootElementClass?>">
        <div id="page">
            <div id="outerHeader">
                <div id="header">
                    Alpaka
                </div>
            </div>
            <div id="outerContent">
                <div id="content">
                    <div id="mainMenu">
                        <?=$this->component($this->boxes['mainMenu']);?>
                    </div>
                    <div class="kwfUp-left" id="innerContent" style="width:<?=$this->componentWidth($this->data)?>px;">
                        <?=$this->component($this->data);?>
                    </div>
                </div>
                <div class="kwfUp-clear"></div>
            </div>
            <div id="outerFooter">
                <div id="footer" class="kwfUp-webStandard">
                    <div class="menu">
                        <?=$this->component($this->boxes['bottomMenu']);?>
                    </div>
                </div>
            </div>
        </div>
        <?=$this->includeCode('footer')?>
    </body>
</html>
