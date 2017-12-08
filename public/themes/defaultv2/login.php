<?php echo theme_view('header'); ?>
<style>body { background: #f5f5f5; }</style>
      <div class="android-content mdl-layout__content">
        <div class="mdl-grid center-items">
  
<?php       
    echo isset($content) ? $content : Template::content();
?>
</div>
        </div>
<style>
.mdl-grid.center-items {
  justify-content: center;
}

.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
}

.alert-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}

.alert-error {
    background-color: #cc6666;
    border-color: #ebccd1;
    color: #ffffff;
}

.alert-warning {
    background-color: #fcf8e3;
    border-color: #faebcc;
    color: #8a6d3b;
}

.alert-info {
    background-color: #d9edf7;
    border-color: #bce8f1;
    color: #31708f;
}

.fade.in {
    opacity: 1;
}
.fade {
    opacity: 0;
    transition: opacity 0.15s linear 0s;
}

.alert-dismissable.close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}</style>

<?php
    echo theme_view('footer', array('show' => true));
?>