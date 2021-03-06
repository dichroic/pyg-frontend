<?php include 'head.php' ?>
  <div id="Gamer_Profile" class="content">
        <div class="section gamer_profile-overview">
                <div class="gamer_profile-overview-avatar_username">
                        <img class="gamer_profile-overview-avatar avatar"/>
                        <h1 class="gamer_profile-overview-username">Puggle</br>Lover</h1>
                </div>
                <ul class="gamer_profile-overview-stats">
                        <li class="gamer_profile-overview-stats-raised">
                                <i class="icon icon-block stats-raised-icon">moneybag</i>
                                <dl>
                                        <dt>Raised</dt>
                                        <dd>$3,405</dd>
                                </dl>
                        </li>
                        <li class="gamer_profile-overview-stats-rank">
                                <i class="icon icon-block">trophy</i>
                                <dl>
                                        <dt>Rank</dt>
                                        <dd>420 / 5,300</dd>
                                </dl>
                        </li>
                        <li class="gamer_profile-overview-stats-upcoming_fundraiser">
                                <i class="icon icon-standard">calendar</i>
                                <dl>
                                        <dt>Upcoming Fundraiser</dt>
                                        <dd>June 30, 2020</dd>
                                </dl>
                        </li>
                        <li class="gamer_profile-overview-stats-location">
                                <i class="icon icon-block">earth</i>
                                <dl>
                                        <dt>Location</dt>
                                        <dd>NYC</dd>
                                </dl>
                        </li>
                        <li class="gamer_profile-overview-stats-twitch_handle">
                                <i class="icon"></i>
                                <dl>
                                        <dt>Twitch Handle</dt>
                                        <dd>Superzombiebbq</dd>
                                </dl>
                        </li>
                </ul>
        </div>

        <div class="section gamer_profile-why_i_paws">
                <div class="why_i_paws">
                        <header><h1>Why I Paws</h1><i class="icon"></i></header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
        </div>

        <div class="gamer_profile-fundraisers">

                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Gamer_Profile-Fundraisers-Upcoming" role="tab" aria-controls="home" aria-selected="true">Upcoming Fundraisers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Gamer_Profile-Fundraisers-Past" role="tab" aria-controls="profile" aria-selected="false">Past Fundraisers</a>
                  </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Gamer_Profile-Fundraisers-Upcoming" role="tabpanel" aria-labelledby="Gamer_Profile-Fundraisers-Upcoming-tab">
                                <ul class="gamer_profile-fundraisers-upcoming-list">
                                        <li class="gamer_profile-fundraisers-upcoming-date">
                                                 <span class="icon icon-standard">calendar</span>
                                                 <h3>June 30,2020</h3>
                                        </li>
                                        <li class="gamer_profile-fundraisers-upcoming-countdown">
                                                <span class="icon icon-standard">stopwatch</span>
                                                <h3 class="countdown" countdown data-date="Jun 30 2020 21:00:00">
                                                        <span data-days></span> Days
                                                        <span data-hours></span> Hours
                                                        <span data-minutes></span> Minutes
                                                        <span data-seconds></span> Seconds
                                                </h3>
                                        </li>
                                        <li class="gamer_profile-fundraisers-upcoming-donations">
                                                <span class="icon icon-block">moneybag</span>
                                                <h3></h3>
                                                <div class="gamer_profile-fundraisers-upcoming-donations-progress_bar"></div>
                                                <button class="button button-green gamer_profile-fundraisers-upcoming-donations-donate_btn">Donate</button>
                                        </li>
                                        <li class="gamer_profile-fundraisers-upcoming-donors">
                                                 <span class="icon icon-standard">user</span>
                                                 <h3>45 Donations</h3>
                                        </li>
                                </ul>
                                <ul class="gamer_profile-fundraisers-upcoming-share">
                                        <li>
                                                <a href="#"><span class="icon icon-standard">link</span> Copy Page Link</a>
                                        </li>
                                        <li>
                                                <a href="#"><span class="icon icon-standard">calendar</span> Add to Calendar</a>
                                        </li>
                                        <li>
                                                <a href="#"><span class="icon icon-social">facebook</span> Share to Facebook</a>
                                        </li>
                                </ul>
                        </div><!-- end upcoming fundraiser tab -->

                        <div class="tab-pane fade" id="Gamer_Profile-Fundraisers-Past" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="gamer_profile-fundraisers-past-item">
                                        <ul>
                                                <li class="gamer_profile-fundraisers-past-date">
                                                         <span class="icon icon-standard">calendar</span>
                                                         <h3>August 30,2019</h3>
                                                </li>
                                                <li class="gamer_profile-fundraisers-past-donations">
                                                         <span class="icon icon-block">moneybag</span>
                                                         <div class="gamer_profile-fundraisers-past-donations-progress_bar"></div>
                                                </li>
                                                <li class="gamer_profile-fundraisers-past-donors">
                                                         <span class="icon icon-standard">user</span>
                                                         <h3>45 Donations</h3>
                                                </li>
                                                <div class="gamer_profile-fundraisers-past-twitch">
                                                </div>
                                        </ul>
                                </div>
                                <div class="gamer_profile-fundraisers-past-item">
                                        <ul>
                                                <li class="gamer_profile-fundraisers-past-date">
                                                         <span class="icon icon-standard">calendar</span>
                                                         <h3>August 30,2019</h3>
                                                </li>
                                                <li class="gamer_profile-fundraisers-past-donations">
                                                         <span class="icon icon-block">moneybag</span>
                                                         <div class="gamer_profile-fundraisers-past-donations-progress_bar"></div>
                                                </li>
                                                <li class="gamer_profile-fundraisers-past-donors">
                                                         <span class="icon icon-standard">user</span>
                                                         <h3>45 Donations</h3>
                                                </li>
                                                <div class="gamer_profile-fundraisers-past-twitch">
                                                </div>
                                        </ul>
                                </div>
                        </div><!-- end past fundraisers tab -->

                </div><!-- end tab-content -->
        </div><!-- end fundraisers section -->
        <div class="section gamer_profile-donations">
                <header class="gamer_profile-donations-header"><h1>Donations</h1></header>
                <ul class="gamer_profile-donations-list">
                        <li class="gamer_profile-donations-list-item">
                                <h3 class="gamer_profile-donations-list-item-donor_name">Donor Name</h3>
                                <span class="gamer_profile-donations-list-item-amount">$45</span>
                                <date class="gamer_profile-donations-list-item-date">April 2, 2019</date>
                                <p class="gamer_profile-donations-list-item-comment">
                                        Comment (optional) Bacon ipsum dolor amet bacon picanha ground round, ham hock occaecat swine frankfurter anim pancetta. Laborum incididunt pancetta enim pork chop eiusmod consequat ullamco meatball tenderloin officia turkey landjaeger. Commodo fatback swine jowl pork chop voluptate venison. Fatback jowl lorem prosciutto, sed ribeye quis cillum elit ground round chuck pig nulla reprehenderit. Sint consequat pancetta, landjaeger nostrud deserunt shankle short loin bacon id officia filet mignon. Kevin tenderloin buffalo ball tip, velit do cupim beef ribs quis eu minim doner.
                                </p>
                        </li>
                </ul>
        </div>
  </div><!-- end gamer profile -->
</body>
</html>