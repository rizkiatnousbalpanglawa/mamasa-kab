<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Berita Lengkap</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('berita') }}">Berita</a></li>
                    <li class="current">Detail</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
        <div class="container" data-aos="fade-up">

            <article class="article">
                <div class="article-header">
                    <div class="meta-categories" data-aos="fade-up">
                        <a href="#" class="category">Technology</a>
                    </div>

                    <h1 class="title" data-aos="fade-up" data-aos-delay="100">The Evolution of User Interface Design:
                        From Skeuomorphism to Neumorphism</h1>

                    <div class="article-meta" data-aos="fade-up" data-aos-delay="200">
                        <div class="author">
                            <img src="{{ asset('front-assets/img/person/person-m-6.webp') }}" alt="Author"
                                class="author-img">
                            <div class="author-info">
                                <h4>David Wilson</h4>
                                <span>UI/UX Design Lead</span>
                            </div>
                        </div>
                        <div class="post-info">
                            <span><i class="bi bi-calendar4-week"></i> April 15, 2025</span>
                            <span><i class="bi bi-chat-square-text"></i> 32x dibaca</span>
                        </div>
                    </div>
                </div>

                <div class="article-featured-image" data-aos="zoom-in">
                    <img src="{{ asset('front-assets/img/blog/blog-hero-1.webp') }}" alt="UI Design Evolution"
                        class="img-fluid">
                </div>


                <div class="article-content">
                    <div class="content-section" id="introduction" data-aos="fade-up">
                        <p class="lead">
                            The journey of user interface design has been marked by significant shifts in aesthetic
                            approaches, each era bringing its own unique perspective on how digital interfaces
                            should look and feel.
                        </p>

                        <p>
                            From the early days of graphical user interfaces to today's sophisticated design
                            systems, the evolution of UI design reflects not just technological advancement, but
                            also changing user expectations and cultural shifts in how we interact with digital
                            products.
                        </p>

                        <div class="highlight-quote">
                            <blockquote>
                                <p>Design is not just what it looks like and feels like. Design is how it works.</p>
                                <cite>Steve Jobs</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="article-footer" data-aos="fade-up">
                    <div class="share-article">
                        <h4>Bagikan artikel ini</h4>
                        <div class="share-buttons">
                            {{-- <a href="#" class="share-button twitter">
                                <i class="bi bi-twitter-x"></i>
                                <span>Share on X</span>
                            </a> --}}
                            <a href="#" class="share-button facebook">
                                <i class="bi bi-facebook"></i>
                                <span>Bagikan di Facebook</span>
                            </a>
                            {{-- <a href="#" class="share-button linkedin">
                                <i class="bi bi-linkedin"></i>
                                <span>Share on LinkedIn</span>
                            </a> --}}
                        </div>
                    </div>

                </div>

            </article>

        </div>
    </section><!-- /Blog Details Section -->

</main>
