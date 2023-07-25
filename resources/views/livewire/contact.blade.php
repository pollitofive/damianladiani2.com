<div>
    <!-- Contact Subpage -->
    <section data-id="contact" class="animated-section">
        <div class="section-content">
            <div class="page-title">
                <h2>{{ __('contact.title') }}</h2>
            </div>

            <div class="row">
                <!-- Contact Info -->
                <div class="col-xs-12 col-sm-4">
                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>{{ __('contact.location') }}</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>

                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>{{ __('contact.email') }}</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>

                    <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>{{ __('contact.freelance') }}</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                    </div>
                </div>
                <!-- End of Contact Info -->

                <!-- Contact Form -->
                <div class="col-xs-12 col-sm-8">
                    <div class="block-title">
                        <h3><span>{{ __('contact.how-can-i-help') }}</span></h3>
                    </div>

                    <form id="form" class="contact-form" action="{{ route('contact') }}"
                          method="post">
                        @csrf

                        <div class="messages"></div>

                        <div class="controls two-columns">
                            <div class="fields clearfix">
                                <div class="left-column">
                                    <div class="form-group form-group-with-icon">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                               placeholder="" required="required" data-error="{{ __('contact.name-is-required') }}">
                                        <label>{{ __('contact.full-name') }}</label>
                                        <div class="form-control-border"></div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group form-group-with-icon">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                               placeholder="" required="required"
                                               data-error="{{ __('contact.valid-email-is-required') }}">
                                        <label>{{ __('contact.email-address') }}</label>
                                        <div class="form-control-border"></div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group form-group-with-icon">
                                        <input id="form_subject" type="text" name="subject" class="form-control"
                                               placeholder="" required="required" data-error="{{ __('contact.subject-is-required') }}">
                                        <label>{{ __('contact.subject') }}</label>
                                        <div class="form-control-border"></div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="right-column">
                                    <div class="form-group form-group-with-icon">
                                            <textarea id="form_message" name="message" class="form-control"
                                                      placeholder="" rows="7" required="required"
                                                      data-error="{{ __('contact.message-is-required') }}"></textarea>
                                        <label>{{ __('contact.message') }}</label>
                                        <div class="form-control-border"></div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="button btn-send" value="{{ __('contact.send') }}">
                        </div>
                    </form>
                </div>
                <!-- End of Contact Form -->
            </div>

        </div>
    </section>
    <!-- End of Contact Subpage -->
</div>
