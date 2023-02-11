<div class="email__sidebar bg-style">
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{__('Global Settings')}}</h2>

            <li>
                <a href="{{ route('settings.general_setting') }}" class="list-item {{ @$generalSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('Global Settings')}}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.bbb-settings') }}" class="list-item {{ @$bbbSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('BigBlueButton Meeting Settings')}}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.jitsi-settings') }}" class="list-item {{ @$jitsiSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('Jitsi Meeting Settings')}}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.gmeet_settings') }}" class="list-item {{ @$gmeetSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('Google Meet Settings')}}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.social-login-settings') }}" class="list-item {{ @$socialLoginSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('Social Login Settings')}}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.cookie-settings') }}" class="list-item {{ @$cookieSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('Cookie Settings')}}</span>
                </a>
            </li>

            <li>
                <a href="{{ route('settings.storage-settings') }}" class="list-item {{ @$storageSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{__('S3 Storage Settings')}}</span>
                </a>
            </li>


            <li>
                <a href="{{ route('settings.vimeo-settings') }}" class="list-item {{ @$vimeoSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Vimeo Settings') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.currency.index') }}" class="list-item {{ @$subNavCurrencyActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Currency Settings') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.meta.index') }}" class="list-item {{ @$metaIndexActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Meta Management') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.site-share-content') }}" class="list-item {{ @$siteShareContentActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Site Share Content') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.map-api-key') }}" class="list-item {{ @$siteMapApiKeyActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Geo Location Api Key') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.color-settings') }}" class="list-item {{ @$colorActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Color Settings') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.font-settings') }}" class="list-item {{ @$fontActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Font Settings') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.device_control') }}" class="list-item {{ @$deviceControlActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Device Control') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.private_mode') }}" class="list-item {{ @$privateModeActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Private Mode') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.subscription_mode') }}" class="list-item {{ @$subscriptionModeActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Subscription Mode') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.saas_mode') }}" class="list-item {{ @$saasModeActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('SaaS Mode') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{__('Location Settings')}}</h2>

            <li>
                <a href="{{ route('settings.location.country.index') }}" class="list-item {{ @$subNavCountryActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Country') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.location.state.index') }}" class="list-item {{ @$subNavStateActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('State') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.location.city.index') }}" class="list-item {{ @$subNavCityActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('City') }}</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{__('Home Settings')}}</h2>

            <li>
                <a href="{{ route('settings.section-settings') }}" class="list-item {{ @$sectionSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Section Settings') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.banner-section') }}" class="list-item {{ @$bannerSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Banner Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.special-feature-section') }}" class="list-item {{ @$specialSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Special Feature Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.course-section') }}" class="list-item {{ @$courseSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Course Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.bundle-course-section') }}" class="list-item {{ @$bundleCourseSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Bundle Course Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.top-category-section') }}" class="list-item {{ @$topCategorySectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Top Category Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.top-instructor-section') }}" class="list-item {{ @$topInstructorSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Top Instructor Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.become-instructor-video-section') }}" class="list-item {{ @$becomeInstructorVideoSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Become Instructor Video Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.customer-say-section') }}" class="list-item {{ @$customerSaySectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Customer Say Section') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.achievement-section') }}" class="list-item {{ @$achievementSectionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Achievement Section') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Mail Configuration') }}</h2>

            <li>
                <a href="{{ route('settings.mail-configuration') }}" class="list-item {{ @$mailConfigSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Mail Configuration') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Payment Options') }}</h2>

            <li>
                <a href="{{ route('settings.payment_method_settings') }}" class="list-item {{ @$paymentMethodSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Payment Method') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.bank.index') }}" class="list-item {{ @$bankSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Bank') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Become an Instructor') }}</h2>

            <li>
                <a href="{{ route('settings.instructor-feature') }}" class="list-item {{ @$instructorFeatureSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Instructor Feature') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.instructor-procedure') }}" class="list-item {{ @$instructorProcedureSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Instructor Procedure') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.instructor.cms') }}" class="list-item {{ @$instructorCMSSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Instructor CMS') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('FAQ') }}</h2>

            <li>
                <a href="{{ route('settings.faq.cms') }}" class="list-item {{ @$faqCMSSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('FAQ CMS') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.faq.tab') }}" class="list-item {{ @$faqCMSTabActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('FAQ Tab') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.faq.question') }}" class="list-item {{ @$faqQuestionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Question & Answer') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Support Ticket') }}</h2>

            <li>
                <a href="{{ route('settings.support-ticket.cms') }}" class="list-item {{ @$supportCMSSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Support Ticket CMS') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.support-ticket.question') }}" class="list-item {{ @$supportQuestionActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Question & Answer') }}</span>
                </a>
            </li>

            <li>
                <a href="{{ route('settings.support-ticket.department') }}" class="list-item {{ @$supportDepartmentActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Support Ticket Department Field') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.support-ticket.priority') }}" class="list-item {{ @$supportPriorityActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Support Ticket Priority Field') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.support-ticket.services') }}" class="list-item {{ @$supportRelatedActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Support Ticket Related Service') }}</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('About Us') }}</h2>

            <li>
                <a href="{{ route('settings.about.gallery-area') }}" class="list-item {{ @$subNavGalleryAreaActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Gallery Area') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.about.our-history') }}" class="list-item {{ @$subNavOurHistoryActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Our History') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.about.upgrade-skill') }}" class="list-item {{ @$subNavUpgradeSkillActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Upgrade Skills') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.about.team-member') }}" class="list-item {{ @$subNavTeamMemberActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Team Member') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.about.instructor-support') }}" class="list-item {{ @$subNavInstructorSupportActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Instructor Support') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.about.client') }}" class="list-item {{ @$subNavClientActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Client') }}</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Contact Us') }}</h2>

            <li>
                <a href="{{ route('settings.contact.cms') }}" class="list-item {{ @$contactUsSettingsActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Contact Us') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Maintenance Mode') }}</h2>

            <li>
                <a href="{{ route('settings.maintenance') }}" class="list-item {{ @$maintenanceModeActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Maintenance Mode') }}</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2>{{ __('Others Settings') }}</h2>

            <li>
                <a href="{{ route('settings.cache-settings') }}" class="list-item {{ @$cacheActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Cache Settings') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.migrate-settings') }}" class="list-item {{ @$migrateActiveClass }}">
                    <img src="{{ asset('admin/images/heroicon/outline/cog.svg') }}" alt="icon">
                    <span>{{ __('Migrate Settings') }}</span>
                </a>
            </li>

        </ul>
    </div>
</div>
