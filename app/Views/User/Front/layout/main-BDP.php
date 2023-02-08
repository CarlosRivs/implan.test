<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylePRO.css" rel="stylesheet" />
    <title><?= $this->renderSection('title')?></title>
    <?=$this->include('User/Front/layout/header')?>
    <?=$this->renderSection('css')?>
</head>

<?=$this->include('User/Front/layout/menu-bancoDP') ?>
<body id="page-top">
    <?=$this->renderSection('content')?>
    <?=$this->include('User/Front/layout/footer')?>
    <?=$this->renderSection('js')?>
</body>
</html>
