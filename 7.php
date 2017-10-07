<!DOCTYPE html>
<?php include 'components/header.php'; ?>

<style>

    @keyframes kobe {
        0% {width: 3vw;}
        50% {width: 0;}
        100% {width: 3vw;}
    }

    @keyframes size {
        0% {font-size: calc(16px + 25vw);}
        50% {font-size: calc(16px + 35vw);}
        100% {font-size: calc(16px + 25vw);}
    }


#kobe {
    display: flex;
    justify-content: center;
    font-size: calc(16px + 25vw);
    text-transform: uppercase;

    animation-name: size;
    animation-duration: 4s;
    animation-iteration-count: infinite;
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




.letter {
    /*opacity: 0.8;*/
}

.zwischenraum {
    animation-name: kobe;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

</style>

<div class="flex-center parent" id="stage">
    <div id="kobe" class="parent">
        <div class="letter">K</div>
        <div class="zwischenraum"></div>
        <div class="letter">o</div>
        <div class="zwischenraum"></div>
        <div class="letter">b</div>
        <div class="zwischenraum"></div>
        <div class="letter">e</div>
        <div class="child flex">
            <div class="letter">K</div>
            <div class="letter">o</div>
            <div class="letter">b</div>
            <div class="letter">e</div>
        </div>
</div>


</div>

<?php include 'components/footer.php'; ?>
