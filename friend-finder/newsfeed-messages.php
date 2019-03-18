<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";

	$sql="SELECT * FROM utilisateur";
	$req = $conn -> query($sql)or die($conn->errorInfo());
	$res=$req->fetch();
	$nom=$res['nom_utilisateur'];
	$prenom=$res['prenom_utilisateur'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:04 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Chatroom | Send and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
    <?php include "menu.php" ?>;
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="user" class="profile-photo" />
            	<h5><a href="timeline.html" class="text-white"><?php echo $prenom,' ',$nom; ?></a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.html">My Newsfeed</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.html">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.html">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.html">Messages</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="newsfeed-images.html">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Sophia Lee"><img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="John Doe"><img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="James Carter"><img src="images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Robert Cook"><img src="images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Richard Bell"><img src="images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Anna Young"><img src="images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.html" title="Julia Cox"><img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
              </ul>
            </div><!--chat block ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End -->

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-5">

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                    <li class="active">
                      <a href="#contact-1" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Linda Lohan</h6>
                        		<p class="text-muted">Hi there, how are you</p>
                            <small class="text-muted">a min ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-2" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Julia Cox</h6>
                            <p class="text-muted">see you soon</p>
                            <small class="text-muted">an hour ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-3" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Sophia Lee</h6>
                            <p class="text-muted">Okay fine. thank you</p>
                            <small class="text-muted">13 hour ago</small>
                            <div class="replied"><i class="icon ion-reply"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-4" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>John Doe</h6>
                        		<p class="text-muted">hey anybody there</p>
                            <small class="text-muted">Yesterday</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-5" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Anna Young</h6>
                            <p class="text-muted">I gotta go</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-6" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Richard Bell</h6>
                        		<p class="text-muted">Hey there?</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>Hi honey, how are you doing???? Long time no see. Where have you been?</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>I have been on vacation</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>it was a great time for me. we had a lot of fun <i class="em em-blush"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>that's cool I wish I were you <i class="em em-expressionless"></i></p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><i class="em em-hand"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">a min ago</small>
                              </div>
                              <p>Hi there, how are you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-2">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Julia Cox</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Hi</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>hellow</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Julia Cox</h5>
                              	<small class="text-muted">an hour ago</small>
                              </div>
                              <p>good</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">an hour ago</small>
                              </div>
                              <p>see you soon</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-3">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sophia Lee</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah  Cruiz</h5>
                              	<small class="text-muted">13 hours ago</small>
                              </div>
                              <p>Okay fine. thank you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-4">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>John Doe</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>John Doe</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>hey anybody there</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-5">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Anna Young</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Anna Young</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>I gotta go</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-6">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hello</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hi</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hey</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hey there</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                  </div><!--Chat Messages in Right End-->

                  <div class="send-message">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type your message">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              <div class="follow-user">
                <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Diana Amber</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Cris Haris</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Brian Walton</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Olivia Steward</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.html">Sophia Page</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </div>

		<?php
		include "footer.php";
		 ?>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:04 GMT -->
</html>
