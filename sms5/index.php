<?php 

    include 'core/init.php';
    include 'core/config.php';
    include 'assets/inc/start.php';

?>

<div class="container">
    <div class="test">

    </div>
    <div class="head">
        <img src="../sms4/img/cabemoji.png" height="150" width="150" />
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" id="panelSMS">
                <div class="panel-body">
                    <form class="form-horizontal" id="formSMS">
                        <div class="form-group">
                            <label for="inputSender" class="col-sm-2 control-label">Sender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSender" placeholder="Any Name/Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSender" class="col-sm-2 control-label">Recipient</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phoneNumber" id="inputRecipient" placeholder="+12 345 678 971">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control maxlength" maxlength="160" rows="3" id="inputMessage"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="btnSend" class="btn btn-default">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <tbody>
                    <?php

                    /*
                        Temp Removal - API IS DOWN

                        $data = getCountryListJson();
                        if ($data['success'] == true){
                            foreach ($data['result'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $value['country'];?></td>
                            <td><?php echo $value['value'];?></td>
                        </tr>
                    <?php
                            }
                        }
                    */
                    ?>
    </div>
</div>
<?php 

    include 'assets/inc/scripts.php';
    include 'assets/inc/end.php';

?>