<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>

<?if (!empty($arResult)):?>
    <nav class="header__nav">

        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
        <?if($arItem["SELECTED"]):?>
           <a href="<?=$arItem["LINK"]?>" class="active"><span><?=$arItem["TEXT"]?></span></a>
        <?else:?>
            <a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
        <?endif?>

        <?endforeach?>

    </nav>
<?endif?>
