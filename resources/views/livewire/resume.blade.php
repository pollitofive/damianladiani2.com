<div>
    <!-- Resume Subpage -->
    <section data-id="resume" class="animated-section">
        <div class="section-content">
            <div class="page-title">
                <h2>{{ __('resume.title') }}</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-7">

                    <div class="block-title">
                        <h3>{{ __('resume.education.title') }}</h3>
                    </div>

                    <div class="timeline timeline-second-style clearfix">
                        @foreach(array_reverse(trans('resume.education.studies')) as $study)
                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">{{ $study['since'] }} - {{ $study['until'] }}</h5>
                                    <span class="item-company">
                                        @isset($study['url'])
                                            <a href="{{ $study['url'] }}" target="_blank">{{ $study['name'] }}</a>
                                        @else
                                            {{ $study['name'] }}
                                        @endisset
                                    </span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    @isset($study['title'])
                                        <h4 class="item-title">{{ $study['title'] }}</h4>
                                    @else
                                        <p>{{ $study['description'] }}</p>
                                    @endisset
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="white-space-50"></div>

                    <div class="block-title">
                        <h3>{{ __('resume.experience.title') }}</h3>
                    </div>

                    <div class="timeline timeline-second-style clearfix">
                        @foreach(array_reverse(trans('resume.experience.jobs')) as $job)
                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">{{ $job['since'] }} - {{ $job['until'] }}</h5>
                                    <span class="item-company">{{ $job['company'] ?? '' }}</span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title">{{ $job['position'] }}</h4>
                                    <p>{{ $job['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <!-- Skills & Certificates -->
                <div class="col-xs-12 col-sm-5">
                    <!-- Design Skills -->
                    <div class="block-title">
                        <h3><span>{{ __('resume.skills.title') }}</span></h3>
                    </div>

                    <!-- Start of Coding Skills -->
                    <div class="skills-info skills-second-style">
                        @foreach(trans('resume.skills.list') as $skill)
                            <div class="skill clearfix">
                                <h4>{{ $skill['name'] }}</h4>
                                <div class="skill-value">{{ $skill['rating'] * 10 }}%</div>
                            </div>
                            <div class="skill-container skill-{{ $skill['rating'] }}">
                                <div class="skill-percentage"></div>
                            </div>
                        @endforeach
                    <!-- End of Coding Skills -->

                    <div class="white-space-10"></div>

                    <!-- Knowledges -->
                    <div class="block-title">
                        <h3><span>{{ __('resume.knowledge.title') }}</span></h3>
                    </div>
                    <ul class="knowledges">
                        @foreach(trans('resume.knowledge.list') as $knowledge)
                            <li>{{ $knowledge }}</li>
                        @endforeach
                    </ul>
                    <!-- End of Knowledges -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Resume Subpage -->
</div>
