<?php include 'head.php' ?>

<div id="Home" class="content">
        <div class="home-hero section">
                <div class="home-hero-background_color"></div>
                <h2>Play Games for those without a voice</h2>
                <p>Paws Your Game’s mission is to help raise money and other resources for animal rescue organizations through video game marathons.</p>
        </div><!--end home-hero-->
        <div class="home-intro section">
                <div class="home-intro-donate_now">
                        <img src="img/icon-home-intro-donate_now.png"/>
                        <p>Want to help support Paws Your Game’s mission in providing resources to no kill shelters? Donate today to help support us in our mission to end kill shelters.</p>
                        <button class="button" href="#">Donate Now</button>
                </div>
                <div class="home-intro-start_gaming">
                        <img src="img/icon-home-intro-start_gaming.png"/>
                        <p>Love playing games? Love animals? Sign up to Paws Your Game and sponsor a local no kill shelter of your choice when we have our first marathon in 2019!</p>
                        <button class="button" href="#">Start Gaming</button>
                </div>
                <div class="home-intro-join_us">
                        <img src="img/icon-home-intro-join_us.png"/>
                        <p>Do you represent a no kill shelter? Interested in working or partnering with us? Sign up to learn more today on how you can help and support Paws Your Game.</p>
                        <button class="button" href="#">Join us</button>
                </div>
        </div><!--end home-intro-->
        <div class="home-leaderboard leaderboard section">
                <h2 class="home-leaderboard-header">Leaderboard</h2>
                <ul class="leaderboard-list">
                <?php for($i=1; $i<=5; $i++){ ?>
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank"><?php echo $i ?></span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_down"></span>
                                </span>
                                <span class="leaderboard-list-item-amount">$20,000</span>
                        </li>
                <?php } ?>
                </ul>
                
        </div><!--end home-leaderboard-->
        <div class="home-news section">
                <?php for($i=1; $i<=3; $i++){ ?>
                <div class="home-news-article news-article">
                        <h3 class="news-article-title">The key to victory is discipline, and that means a well made bed. You will practice until you can make your bed in your sleep</h3>
                        <h4 class="news-article-publisher">Publisher</h4>
                        <h5 class="news-article-date">00 / 00 / 00</h5>
                        <div class="news-article-snippet">
                                <p>
                                        Look, everyone wants to be like Germany, but do we really have the pure strength of 'will'? Come, Comrade Bender! We must take to the streets! You know the worst thing about being a slave? They make you work, but they don't pay you or let you go.
                                </p>
                                <p>
                                        Calculon is gonna kill us and it's all everybody else's fault!
                                        It's a T. It goes "tuh".
                                        I don't 'need' to drink. I can quit anytime I want!
                                        And until then, I can never die? That could be
                                </p>
                        </div>
                </div>
                <?php } ?>
        </div><!--end home-news-->
        <div class="home-about section">
                <div class="home-about-goal">
                        <span class="icon icon-standard">dollarsign</span>
                        <p>Our main goal is to provide funding for non-profit, no-kill animal rescues and refugees that will allow fosters and facilities to rescue more animals than ever before.</p>
                </div>
                <div class="home-about-funds">
                        <p>We raise these funds in many ways, the primary source will be community gaming events and marathons.</p>
                        <span class="icon icon-block">videogame</span>
                </div>
                <div class="home-about-gamers">
                        <span class="icon icon-block">timer</span>
                        <p>Participating gamers will be able to fundraise for the rescue of their choice while gaming for 24 hours straight.</p>
                </div>
                
        </div><!--end home-about-->
        <div classs="home-data section">
                
        </div><!--end home-data-->
</div><!-- end Home-->