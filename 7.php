<!DOCTYPE html>
<?php include 'components/header.php'; ?>

<style>
h1 {
    font-size: calc(16px + 20vw);
}

.child h2 {
    display: block;
    padding: 15px;
    font-size: 40px;
    margin: 0;

}

#stage {
        height: 95vh;
}

</style>

<div class="flex-center parent" id="stage">
    <h1>Kobe</h1>
    <div class="child topleft">
        <h2>aaa</h2>
    </div>
    <div class="child topright">
        <h2>aaa</h2>
    </div>
    <div class="child bottomleft">
        <h2>aaa</h2>
    </div>
    <div class="child bottomright">
        <h2>aaa</h2>
    </div>
</div>

<?php include 'components/footer.php'; ?>
