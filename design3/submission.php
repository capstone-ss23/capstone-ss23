<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!--chat box style-->
<style>
    #chat {
        float: right;
        clear: right;
    }
    #chat2{
        clear: right;
    }
    #chat ul li,#chat2 ul li {
        list-style: none;
    }
    #name,#time{
        font-size: 12px;
        color: green;
    }
    #con{
        width: 300px;
        border: solid 1px;
        border-radius: 10px;
    }
</style>
<div class="full">

<p>When you are done, use this page to submit your diagram to the peer review system. </p>
<?php echo Toggle::begin("Submission Instructions", "h3"); ?>
<p>When you are done with a diagram, use this page to submit it to the peer review system and to view the reviews. </p>
<p>To export a diagram from Visual Paradigm for submission:</p>
<p>1. Ensure the diagram you want to export is open. </p>
<p>2. Select Project/Export/Active Diagram as Image...</p>
<p>3. Set the Save as type to PNG files (*.png with background). </p>
<p>4. Set the dpi to 72 (the default is 96).</p>
<p>5. Choose a filename and save the file.</p>
<p>The system should look something like this:</p>
<p class="figure"><img src="img/vpexport.png" alt="Visual Paradigm export" width="563" height="418"></p>
<p>Select the file with the Choose File button, then click Upload File. You should see your image after it is done loading.</p>
<p>You can submit as often as you like. You are encouraged to resubmit revisions after reading the peer reviews. You have 24 hours after any review to resubmit, even after the due date.</p>

<?php echo Toggle::end(); ?>
<?php echo $view->present_submissions(); ?>


<!--week10 Zhuofan Zeng new added content-->
<h3 style="text-align: center;background: #00723f;color: white;">Reviews of this assignment appear here.</h3>

    <div id="">
        <?php $res = $view->getReviewerContent(); ?>
        <?php if (empty($res)) {?>
        <?php }else{?>
            <!-- foreach loop-->
            <?php foreach ($res['allData'] as $key => $value){?>
                <!--box for display comment-->
                <div style="width: 769px; height: 200px; border: solid 1px; overflow-x: scroll;">
                    <?php foreach ($value as $v){?>
                        <?php $data = json_decode($v['metadata'],true);?>
                        <?php if ($res['meid']==$v['reviewerid']){?>
                            <?php echo "<div id='chat'>
                                <ul>
                                    <li id='name'>you</li>
                                    <li id='con'>&nbsp;".$data['review']['review']."</li>
                                    <li id='time'>".$v['time']."</li>
                                </ul>
                             </div>";
                        }else{?>
                            <?php echo "<div id='chat2'>
                                <ul>
                                    <li id='name'>$key</li>
                                    <li id='con' style='background-color: #0c5645; color: white;'>&nbsp;".$data['review']['review']."</li>
                                    <li id='time'>".$v['time']."</li>
                                </ul>
                            </div>"; }?>
                    <?php }?>
                </div>
                <br>
            <?php }?>
            <br>
            <form action="/cl/api/review/saveContent" method="POST">
                <!--box for intput comment-->
                <textarea name="content" rows="5" cols="90"></textarea>
                <!--drop down box-->
                <select name="memberid" id="">
                    <option value="">Please choose</option>
                    <!--reviewData-->
                    <?php foreach ($res['reviewData'] as $key => $value){?>
                        <option value="<?php echo $value;?>">
                            review<?php echo $key;?>
                        </option>   <!--return key 0 or 1-->
                    <?php }?>
                </select>
                <!--send button-->
                <input type="submit" value="submit">
            </form>
        <?php }?>
    </div>
    <!--week10 end-->
<?php echo Toggle::begin("I get 'Not a valid image'", "p"); ?>

<p>Submissions must be a PNG file. If you try to submit the Visual Paradigm .vpp file, it will fail 
with this message. Re-read the instructions above 
on how to export an image of your design and follow them carefully.</p>

<?php echo Toggle::end(); ?>
</div>

</body>

