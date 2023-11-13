<style>
    #alert{
    z-index: 99999999 !important;;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30rem;
    background-color: var(--bgcolor);
    height: 17rem;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}
#closeAlertButton{
    width: 5rem;
    height: 3rem;
    border-radius: 15px;
    border: none;
    background-color: var(--logo);
    color: var(--text);
    font-size: 1rem;
    cursor: pointer;
}
#closeAlertButton:hover{
    color: var(--textFaded);
}
</style>
<?php
    function alert($notice){
        ?>
            <div id="alert">
                <div class="message"><?php echo($notice);?></div>
                <button id="closeAlertButton" onclick="document.getElementById('alert').style.display='none'">Ok</button>
            </div>
        <?php
    }
?>