<?php //print_r($details); ?>
 <section id="breadcrumb">
                <div class="row">
                    <div class="large-12 columns">
                        <nav aria-label="You are here:" role="navigation">
                            <ul class="breadcrumbs">
                                <li><i class="fa fa-home"></i><a href="home-v1.html">Home</a></li>
                                <li>
                                    <span class="show-for-sr">Current: </span> Profile
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section><!--end breadcrumbs-->

            <!-- profile top section -->
            <section class="topProfile">
                <div class="main-text text-center">
                    <div class="row">
                        <div class="large-12 columns">
                            <h3>World’s Biggest</h3>
                            <h1>Powerfull Video Theme</h1>
                        </div>
                    </div>
                </div>
                <div class="profile-stats">
                    <div class="row secBg">
                        <div class="large-12 columns">
                            <div class="profile-author-img">
                                <img src="<?php echo base_url().$pro[0]['txt_profile_image'];?>" alt="">
                            </div>
                            <div class="profile-subscribe">
                                <span><i class="fa fa-users"></i><?php echo $follow['pqr']; ?></span>
                                <button type="submit" name="subscribe">Followers</button>
                            </div>
                           
                            <div class="clearfix">
                                <div class="profile-author-name float-left">
                                    <h4><?php echo $pro[0]['txt_fname'].' '.$pro[0]['txt_lname'];?></h4>
                                    <p>Join Date : <span>5 January 16</span></p>
                                </div>
                                <div class="profile-author-stats float-right">
                                    <ul class="menu">
                                        <li>
                                            <div class="icon float-left">
                                                <i class="fa fa-video-camera"></i>
                                            </div>
                                            <div class="li-text float-left">
                                                <p class="number-text">36</p>
                                                <span>Videos</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon float-left">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="li-text float-left">
                                                <p class="number-text">50</p>
                                                <span>favorites</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon float-left">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="li-text float-left" href="<?php echo site_url(); ?>/user/profile">
                                                <p class="number-text"><?php echo $follow['pqr']; ?></p>
                                                <span>Followers</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon float-left">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                            <div class="li-text float-left">
                                                <p class="number-text">26</p>
                                                <span>comments</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End profile top section -->
            <div class="row">
                <!-- left side content area -->
                <div class="large-8 columns">
                    <!-- single post description -->
                    <section class="singlePostDescription">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="heading">
                                    <i class="fa fa-user"></i>
                                    <h4>Description</h4>
                                </div>
                                <div class="description">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                    <div class="site profile-margin">
                                        <button><i class="fa fa-globe"></i>Site</button>
                                        <a href="#" class="inner-btn">www.betube.com</a>
                                    </div>
                                    <div class="email profile-margin">
                                        <button><i class="fa fa-envelope"></i>Email</button>
                                        <span class="inner-btn"><?php echo $pro[0]['txt_email']; ?></span>
                                    </div>
                                    <div class="phone profile-margin">
                                        <button><i class="fa fa-phone"></i>Phone</button>
                                        <span class="inner-btn"><?php echo $pro[0]['int_phone_no']; ?></span>
                                    </div>
                                    <div class="socialLinks profile-margin">
                                        <button><i class="fa fa-share-alt"></i>get socialize</button>
                                        <a href="#" class="inner-btn"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="inner-btn"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="inner-btn"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="inner-btn"><i class="fa fa-flickr"></i></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section><!-- End single post description -->

                    <!-- author videos -->
                    <section class="content content-with-sidebar margin-bottom-10">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="row column head-text clearfix">
                                    <h4 class="pull-left"><i class="fa fa-video-camera"></i>Videos</h4>
                                    <div class="grid-system pull-right show-for-large">
                                        <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                                        <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                        <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="tabs-content" data-tabs-content="newVideos">
                                    <div class="tabs-panel is-active" id="new-all">
                                        <div class="row list-group">

                                            <div class="item large-4 medium-6 columns group-item-grid-default">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/3.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns group-item-grid-default">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/4.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns group-item-grid-default">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/5.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns group-item-grid-default">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/6.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns group-item-grid-default">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/7.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns group-item-grid-default end">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/8.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center row-btn">
                                    <a class="button radius" href="#">View All Video</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--author favorite videos-->
                    <section class="content content-with-sidebar margin-bottom-10">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="row column head-text clearfix">
                                    <h4 class="pull-left"><i class="fa fa-video-camera"></i>Videos</h4>
                                    <div class="grid-system pull-right show-for-large">
                                        <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                        <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                        <a class="secondary-button current list" href="#"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="tabs-content" data-tabs-content="newVideos">
                                    <div class="tabs-panel is-active" id="favorite">
                                        <div class="row list-group">

                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/5.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/6.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns list">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/7.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item large-4 medium-6 columns list end">
                                                <div class="post thumb-border">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo base_url(); ?>assets/images/video-thumbnail/8.jpg" alt="new video">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                                        </a>
                                                        <div class="video-stats clearfix">
                                                            <div class="thumb-stats pull-left">
                                                                <h6>HD</h6>
                                                            </div>
                                                            <div class="thumb-stats pull-left">
                                                                <i class="fa fa-heart"></i>
                                                                <span>506</span>
                                                            </div>
                                                            <div class="thumb-stats pull-right">
                                                                <span>05:56</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-des">
                                                        <h6><a href="#">There are many variations of passage.</a></h6>
                                                        <div class="post-stats clearfix">
                                                            <p class="pull-left">
                                                                <i class="fa fa-user"></i>
                                                                <span><a href="#">admin</a></span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>5 January 16</span>
                                                            </p>
                                                            <p class="pull-left">
                                                                <i class="fa fa-eye"></i>
                                                                <span>1,862K</span>
                                                            </p>
                                                        </div>
                                                        <div class="post-summary">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        </div>
                                                        <div class="post-button">
                                                            <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center row-btn">
                                    <a class="button radius" href="#">View All Video</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- followers -->
                    <section class="content content-with-sidebar followers margin-bottom-10">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="row column head-text clearfix">
                                    <h4 class="pull-left"><i class="fa fa-users"></i>Followers</h4>
                                </div>
                                <div class="row collapse">
								
                                    <div class="large-2 small-6 medium-3 columns">
                                        <div class="follower">
                                            <div class="follower-img">
                                                <img src="<?php echo base_url(); ?>assets/images/follower-img.png" alt="followers">
                                            </div>
                                            <span>Frank Wright</span>
                                            <button type="submit" name="follow">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="large-2 small-6 medium-3 columns">
                                        <div class="follower">
                                            <div class="follower-img">
                                                <img src="<?php echo base_url(); ?>assets/images/follower2.png" alt="followers">
                                            </div>
                                            <span>John Doe</span>
                                            <button type="submit" name="follow">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="large-2 small-6 medium-3 columns">
                                        <div class="follower">
                                            <div class="follower-img">
                                                <img src="<?php echo base_url(); ?>assets/images/follower3.png" alt="followers">
                                            </div>
                                            <span>Nancy john</span>
                                            <button type="submit" name="follow">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="large-2 small-6 medium-3 columns">
                                        <div class="follower">
                                            <div class="follower-img">
                                                <img src="<?php echo base_url(); ?>assets/images/follower4.png" alt="followers">
                                            </div>
                                            <span>Frank</span>
                                            <button type="submit" name="follow">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="large-2 small-6 medium-3 columns">
                                        <div class="follower">
                                            <div class="follower-img">
                                                <img src="<?php echo base_url(); ?>assets/images/follower5.png" alt="followers">
                                            </div>
                                            <span>lucy</span>
                                            <button type="submit" name="follow">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="large-2 small-6 medium-3 columns end">
                                        <div class="follower">
                                            <div class="follower-img">
                                                <img src="<?php echo base_url(); ?>assets/images/follower66.png" alt="followers">
                                            </div>
                                            <span>daisy</span>
                                            <button type="submit" name="follow">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Comments -->
                    <section class="content comments">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="main-heading borderBottom">
                                    <div class="row padding-14">
                                        <div class="medium-12 small-12 columns">
                                            <div class="head-title">
                                                <i class="fa fa-comments"></i>
                                                <h4>Comments <span>(4)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-box thumb-border">
                                    <div class="media-object stack-for-small" id="like">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src= "<?php echo base_url().$pro[0]['txt_profile_image']; ?>" alt="">
                                            </div>
                                            <h6><a href="#"><?php echo $pro[0]['txt_fname']; ?></a></h6>
                                        </div>
                                        <div class="media-object-section comment-textarea">
                                           <form method="post" action="">
                                                <textarea name="commentText" id="commentText" placeholder="Add a comment here.."></textarea>
												<input type='hidden' name='parent_id' value="0" id='parent_id' />
												
                                                <input type="button" name="submit" id="submit" onclick="addcomment();" value="send"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-sort text-right">
                                    <span>Sort By : <a href="#">newest</a> | <a href="#">oldest</a></span>
                                </div>
								<div class="main-comment showmore_one" id="id_comments">
                                </div>
								<!-- main comment -->
								<?php /*foreach($details as $detail) { ?>
                                <div class="main-comment showmore_one">
                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src= "<?php echo base_url(); ?><?php echo $detail['txt_profile_image']?>" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="#"></a> Said: <?php echo $detail['txt_fname'].' '.$detail['txt_lname']?></span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p><?php echo $detail['txt_comments'] ?></p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class='reply float-right hide-reply'></span>
                                            </div>

                                            <!-- end sub comment -->
                                        </div>
                                    </div>
                                </div> <?php }*/ ?><!-- End main comment -->

                            </div>
                        </div>
                    </section>
                </div><!-- end left side content area -->
                <!-- sidebar -->
                <div class="large-4 columns">
                    <aside class="secBg sidebar">
                        <div class="row">
                            <!-- profile overview -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Profile Overview</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <ul class="profile-overview">
                                            <li class="clearfix"><a href="profile-about-me.html"><i class="fa fa-user"></i>about me</a></li>
                                            <li class="clearfix"><a href="profile-video.html"><i class="fa fa-video-camera"></i>Videos <span class="float-right">36</span></a></li>
                                            <li class="clearfix"><a href="profile-favorite.html"><i class="fa fa-heart"></i>Favorite Videos<span class="float-right">50</span></a></li>
                                            <li class="clearfix"><a href="<?php echo site_url();?>/user/profile"><i class="fa fa-users"></i>Followers<span class="float-right"><?php echo $follow['pqr']; ?></span></a></li>
											<li class="clearfix"><a href="<?php echo site_url();?>/user/profile"><i class="fa fa-users"></i>Following<span class="float-right"><?php echo $following['pqr']; ?></span></a></li>
                                            <li class="clearfix"><a href="profile-comments.html"><i class="fa fa-comments-o"></i>comments<span class="float-right">26</span></a></li>
                                            <li class="clearfix"><a href="profile-settings.html"><i class="fa fa-gears"></i>Profile Settings</a></li>
                                            <li class="clearfix"><a href="home-v1.html"><i class="fa fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                        <a href="submit-post.html" class="button"><i class="fa fa-plus-circle"></i>Submit Video</a>
                                    </div>
                                </div>
                            </div><!-- End profile overview -->
                            <!-- search Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Search Videos</h5>
                                    </div>
                                    <form id="searchform" method="get" role="search">
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                            <div class="input-group-button">
                                                <input type="submit" class="button" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End search Widget -->

                            <!-- most view Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Most View Videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="images/video-thumbnail/7.jpg" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="images/widget-most1.png" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="images/widget-most2.png" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="images/widget-most3.png" alt="most viewed videos">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end most view Widget -->

                            <!-- categories -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox clearfix">
                                    <div class="widgetTitle">
                                        <h5>Categories</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <ul>
                                            <li class="cat-item"><a href="#">Entertainment &nbsp; (6)</a></li>
                                            <li class="cat-item"><a href="#">Historical &amp; Archival &nbsp;(8)</a></li>
                                            <li class="cat-item"><a href="#">Technology&nbsp;(4)</a></li>
                                            <li class="cat-item"><a href="#">People&nbsp;(3)</a></li>
                                            <li class="cat-item"><a href="#">Fashion &amp; Beauty&nbsp;(2)</a></li>
                                            <li class="cat-item"><a href="#">Nature&nbsp;(1)</a></li>
                                            <li class="cat-item"><a href="#">Automotive&nbsp;(5)</a></li>
                                            <li class="cat-item"><a href="">Foods &amp; Drinks&nbsp;(5)</a></li>
                                            <li class="cat-item"><a href="#">Foods &amp; Drinks&nbsp;(10)</a></li>
                                            <li class="cat-item"><a href="#">Animals&nbsp;(12)</a></li>
                                            <li class="cat-item"><a href="#">Sports &amp; Recreation&nbsp;(14)</a></li>
                                            <li class="cat-item"><a href="">Places &amp; Landmarks&nbsp;(16)</a></li>
                                            <li class="cat-item"><a href="">Places &amp; Landmarks&nbsp;(1)</a></li>
                                            <li class="cat-item"><a href="#">Travel&nbsp;(2)</a></li>
                                            <li class="cat-item"><a href="#">Transportation&nbsp;(3)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- social Fans Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>social fans</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="social-links">
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-facebook"></i>
                                                <span>698K</span>
                                                <span>fans</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-twitter"></i>
                                                <span>598</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-google-plus"></i>
                                                <span>98k</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-youtube"></i>
                                                <span>168k</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="#">
                                                <i class="fa fa-vimeo"></i>
                                                <span>498</span>
                                                <span>followers</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End social Fans Widget -->

                            <!-- ad banner widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Recent post videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="advBanner text-center">
                                            <a href="#"><img src="images/sideradv.png" alt="sidebar adv"></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end ad banner widget -->

                            <!-- Recent post videos -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Recent post videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "images/category/category4.png" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "images/category/category2.png" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "images/sidebar-recent1.png" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src= "images/sidebar-recent2.png" alt="recent">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Recent post videos -->

                            <!-- tags -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Tags</h5>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="#">3D Videos</a>
                                        <a href="#">Videos</a>
                                        <a href="#">HD</a>
                                        <a href="#">Movies</a>
                                        <a href="#">Sports</a>
                                        <a href="#">3D</a>
                                        <a href="#">Movies</a>
                                        <a href="#">Animation</a>
                                        <a href="#">HD</a>
                                        <a href="#">Music</a>
                                        <a href="#">Recreation</a>
                                    </div>
                                </div>
                            </div><!-- End tags -->
                        </div>
                    </aside>
                </div><!-- end sidebar -->
            </div>

<script type="text/javascript">
function addcomment(){
  if($("#commentText").val()!=''){
  //$("#commentText").val('');	
  var subject=$('#commentText').val().trim();
  //alert(subject);
		//alert(subject);	
			$.ajax({
				type:'POST',
				url:"<?php echo site_url().'/user/add_comment/'?>",
				data:
				{  
				    'comment':subject
					
				},
				dataType: 'json',
				success:function(response)
			{
				
				if(response)
				{
				html='';
				$.each(response, function(key, value) { 
				  //alert(value.txt_comments); 				 
				html+= '<div class="media-object stack-for-small">';
				html+='<div class="media-object-section comment-img text-center">';
				html+='<div class="comment-box-img">';
				if(value.txt_profile_image!='') html+='<img src= "<?php echo base_url(); ?>'+value.txt_profile_image+'" alt="comment">';
				else html+='<img src= "<?php echo base_url(); ?>'+value.txt_no_image+'" alt="comment">';
				html+='</div>';
				html+='</div>';
				html+='<div class="media-object-section comment-desc">';
				 html+='<div class="comment-title">';
				html+='<span class="name"><a href="#"></a> Said:'+value.txt_fname+'</span>';
			    html+='<span class="time float-right"><i class="fa fa-clock-o"></i>'+value.dt_timestamp+'</span></div>';
				html+='<div class="comment-text">';
				html+='<p>'+value.txt_comments+'</p></div>';
				html+='<div class="comment-btns">';
				html+='<span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#">';
				html+='<i class="fa fa-thumbs-o-down"></i></a></span>';
				html+='<span><a href="#"><i class="fa fa-share"></i>Reply</a></span>';
				html+='<span class="reply float-right hide-reply"></span></div></div></div>';				
				});
				$("#id_comments").append(html);
				}
				else
				{
					alert("Data not Recieved");
				}
			},
			error:function(response)
			{
				alert("failure");
			},
		});
  }else{
	  alert();
  }
}
</script>