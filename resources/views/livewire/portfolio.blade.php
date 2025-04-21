<div>
    <!-- Portfolio Subpage -->
    <section data-id="portfolio" class="animated-section">
        <div class="section-content">
            <div class="page-title">
                <h2>{{ __('portfolio.title') }}</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <!-- Portfolio Content -->
                    <div class="portfolio-content">
                        <div class="blog-masonry two-columns clearfix">
                            @foreach(trans('portfolio.projects') as $project)
                                <div class="item post-1">
                                    <div class="blog-card">
                                        <div class="media-block">
                                            <a href="{{ $project['url'] }}" target="_blank">
                                                <img src="{{ $project['photo'] }}" class="size-blog-masonry-image-two-c" alt="{{ $project['name'] }}" title="{{ $project['name'] }}">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ $project['code'] }}" target="_blank">{{ __('portfolio.code') }}</a>
                                            <a href="{{ $project['url'] }}" target="_blank">
                                                <h4 class="blog-item-title">{{ $project['name'] }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- End of Portfolio Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Portfolio Subpage -->
</div>
