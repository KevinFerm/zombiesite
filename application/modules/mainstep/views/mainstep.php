    <div class="step1 ribbon l-box-lrg pure-g-r">
        <div class="l-box-lrg is-center pure-u-1-5 ">
            <a href="#" class="stylish">1</a>
        </div>
        <div class="pure-u-3-5 ">

            <h2 class="content-head content-head-ribbon"><?php echo $mainstep[0][0]['title']?></h2>

            <p><?php echo $mainstep[0][0]['desc']?></p>
            <?php if(@$user_profile): ?>
                <?php foreach($substep[1] as $x): ?>
                <ul>
                <li><a href="#ministeps" class="ministeps" id="ministeps_<?php echo $x['id']?>"><?php echo $x['title']; ?></a></li>
                </ul>
                <div id="ministep_<?php echo $x['id']?>" style="display:none;"><?php echo $x['text']; ?></div>
                <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>

    <div class="step2 ribbon l-box-lrg pure-g-r">
        <div class="l-box-lrg is-center pure-u-1-5 ">
            <a href="#" class="stylish">2</a>
        </div>
        <div class="pure-u-3-5 ">

            <h2 class="content-head content-head-ribbon"><?php echo $mainstep[1][0]['title']?></h2>

            <p><?php echo $mainstep[1][0]['desc']?></p>
                <?php if(@$user_profile): ?>
                <?php foreach($substep[2] as $x): ?>
                <ul>
                <li><a href="#ministeps" class="ministeps" id="ministeps_<?php echo $x['id']?>"><?php echo $x['title']; ?></a></li>
                </ul>
                <div id="ministep_<?php echo $x['id']?>" style="display:none;"><?php echo $x['text']; ?></div>
                <?php endforeach; ?>
                <?php endif; ?>

        </div>
    </div>

    <div class="step3 ribbon l-box-lrg pure-g-r">
        <div class="l-box-lrg is-center pure-u-1-5 ">
            <a href="#" class="stylish">3</a>
        </div>
        <div class="pure-u-3-5 ">

            <h2 class="content-head content-head-ribbon"><?php echo $mainstep[2][0]['title']?></h2>

            <p><?php echo $mainstep[2][0]['desc']?></p>
                <?php if(@$user_profile): ?>
                <?php foreach($substep[3] as $x): ?>
                <ul>
                <li><a href="#ministeps" class="ministeps" id="ministeps_<?php echo $x['id']?>"><?php echo $x['title']; ?></a></li>
                </ul>
                <div id="ministep_<?php echo $x['id']?>" style="display:none;"><?php echo $x['text']; ?></div>
                <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>

    <div class="step4 ribbon l-box-lrg pure-g-r">
        <div class="l-box-lrg is-center pure-u-1-5 ">
            <a href="#" class="stylish">4</a>
        </div>
        <div class="pure-u-3-5 ">

            <h2 class="content-head content-head-ribbon"><?php echo $mainstep[3][0]['title']?></h2>

            <p><?php echo $mainstep[3][0]['desc']?></p>
                <?php if(@$user_profile): ?>
                <?php foreach($substep[4] as $x): ?>
                <ul>
                <li><a href="#ministeps" class="ministeps" id="ministeps_<?php echo $x['id']?>"><?php echo $x['title']; ?></a></li>
                </ul>
                <div id="ministep_<?php echo $x['id']?>" style="display:none;"><?php echo $x['text']; ?></div>
                <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>
