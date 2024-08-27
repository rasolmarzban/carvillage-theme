<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 innerpage overlay" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <span class="d-block mb-3 text-white" data-aos="fade-up"><?php the_date('F j, Y'); ?> <span class="mx-2 text-primary">&bullet;</span> by <?php the_author_posts_link(); ?></span>
                            <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 blog-content">
                        <p class="lead"><?php the_content(); ?></p>
                        <div class="pt-5">
                            <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="pt-5">
                    <h3 class="mb-5">6 Comments</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <?php
                                // Get the author's ID
                                $author_id = get_comment($comment)->user_id; // Assuming $comment is available and refers to the current comment
                                // Get the author's Gravatar
                                echo get_avatar($author_id, 50);
                                ?>
                            </div>
                            <div class="comment-body">
                                <h3><?php echo get_comment($comment)->comment_author; ?></h3> <!-- Adjust as needed -->
                                <div class="meta"><?php echo get_comment($comment)->comment_date; ?></div> <!-- Adjust as needed -->
                                <p><?php echo get_comment($comment)->comment_content; ?></p> <!-- Adjust as needed -->
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_3.jpg" alt="Free Website Template by Free-Template.co">
                            </div>
                            <div class="comment-body">
                                <h3>Chris Meyer</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>

                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="images/person_5.jpg" alt="Free Website Template by Free-Template.co">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Chintan Patel</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>


                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>

                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="images/person_4.jpg" alt="Free Website Template by Free-Template.co">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Ben Afflick</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                        <p><a href="#" class="reply">Reply</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                            </div>

                        </form>
                    </div>
                </div>

                    </div>
                    <div class="col-md-4 sidebar">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box">
                            <div class="categories">
                                <h3>Categories</h3>
                                <li><a href="#">Creatives <span>(12)</span></a></li>
                                <li><a href="#">News <span>(22)</span></a></li>
                                <li><a href="#">Design <span>(37)</span></a></li>
                                <li><a href="#">HTML <span>(42)</span></a></li>
                                <li><a href="#">Web Development <span>(14)</span></a></li>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <?php
                            // Get the author's ID
                            $author_id = get_the_author_meta('ID');

                            // Get the author's Gravatar
                            echo get_avatar($author_id, 96, '', '', array('class' => 'img-fluid mb-4 w-50 rounded-circle'));
                            ?>
                            <h3 class="text-black">About The Author</h3>
                            <p><?php echo get_the_author_meta('description'); // This pulls the author's biographical info 
                                ?></p>
                            <p><a href="<?php echo get_author_posts_url($author_id); ?>" class="btn btn-primary btn-md text-white">Read More</a></p>
                        </div>

                        <div class="sidebar-box">
                            <h3 class="text-black">Paragraph</h3>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>