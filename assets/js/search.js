//Wordpress jQuery is in compatibility mode, '$' must be replaced with 'jQuery'
class Search {
	// 1.Create Object
	constructor() {
		this.addSearchHTML();
		this.resultsDiv = jQuery("#search-overlay__results");
		this.openButton = jQuery(".js-search-trigger");
		this.closeButton = jQuery(".search-overlay__close");
		this.searchOverlay = jQuery(".search-overlay");
		this.searchField = jQuery("#search-term");
		this.events();
		this.isOverlayOpen = false;
		this.isSpinnerVisible = false;
		this.previousValue;
		this.typingTimer;
	}

	// 2. Events
	events() {
		this.openButton.on("click", this.openOverlay.bind(this));
		this.closeButton.on("click", this.closeOverlay.bind(this));
		jQuery(document).on("keydown", this.keyPressDispatcher.bind(this));
		this.searchField.on("keyup",this.typingLogic.bind(this));
	}


	// 3. Methods

	typingLogic(){
		if (this.searchField.val() != this.previousValue) {
			clearTimeout(this.typingTimer);

			if (this.searchField.val()) {
				if (this.isSpinnerVisible == false) {
					this.resultsDiv.html('<div class="spinner-loader"></div>');
					this.isSpinnerVisible = true;
			}
				this.typingTimer = setTimeout(this.getResults.bind(this), 750);
			} else {
				this.resultsDiv.html('');
				this.isSpinnerVisible = false;
			}

		}


		this.previousValue = this.searchField.val();
	}

	getResults(){
		jQuery.getJSON(amproData.root_url + '/wp-json/americanpromise/v1/search?term=' + this.searchField.val(), (results)=>{
				this.resultsDiv.html(`
				<div class="row">
					<div class="one-third first">
						<h2 class="search-overlay__section-title">Pages</h2>
						${results.pages.length ? '<ul class="link-list min-list">' : '<p style="color: black; font-size: 1.3rem;">No Pages Found</p>'}
							${results.pages.map(item => `<li><a href="${item.permalink}" target="_blank">${item.title}</a></li>`).join('')}
						${results.pages.length ? '</ul>' : ''}
					</div>
					<div class="one-third">
						<h2 class="search-overlay__section-title">Promising Stories</h2>
						${results.posts.length ? '<ul class="link-list min-list">' : '<p style="color: black; font-size: 1.3rem;">No Stories Found</p>'}
							${results.posts.map(item => `<li><a href="${item.permalink}" target="_blank">${item.title}</a>
						${item.postType == 'post' ? `- ${item.publishDate}` : ''}</li>`).join('')}
						${results.events.length ? '</ul>' : ''}
						<a class="nav-link--end" href="${amproData.root_url}/who-we-are/promising-stories/" target="_blank">View All Stories</a>
					</div>
					<div class="one-third">
						<h2 class="search-overlay__section-title">Upcoming Events</h2>
						${results.events.length ? '<ul class="link-list min-list">' : '<p style="color: black; font-size: 1.3rem;">No Events Found</p>'}
							${results.events.map(item => `
							<li>
							<div class="event-summary">
								<a class="event-summary__date" href="${item.permalink}" target="_blank">
									<span class="event-summary__month">${item.month}</span>
									<span class="event-summary__day">${item.day}</span>
								</a>
								<div class="event-summary__content">
									<p style="font-size:1.3rem;"><a href="${item.permalink}" target="_blank">${item.title}</a></p>
								</div>
							</div>
							</li>
							`).join('')}
						${results.events.length ? '</ul>' : ''}
						<a class="nav-link--end" href="${amproData.root_url}/events" target="_blank">View All Events</a>
					</div>
				</div>
				`);
			this.isSpinnerVisible = false;
		});
	}

	keyPressDispatcher(e) {
		if (e.keyCode == 27 && this.isOverlayOpen == true) {
			this.closeOverlay();
		}
	}

	openOverlay() {
		this.searchOverlay.addClass("search-overlay--active");
		jQuery("body").addClass("body-no-scroll");
		jQuery("#mobile-genesis-nav-primary").css("z-index","-1");
		setTimeout(() => this.searchField.focus(), 301);
		this.isOverlayOpen = true;
		return false;
	}

	closeOverlay() {
		this.searchOverlay.removeClass("search-overlay--active");
		jQuery("body").removeClass("body-no-scroll");
		jQuery("#mobile-genesis-nav-primary").css("z-index","auto");
		this.searchField.val('');
		this.isOverlayOpen = false;
	}

	addSearchHTML() {
		jQuery("body").append(`
			<div class="search-overlay">
				<div class="search-overlay__top">
					<div class="container">
						<i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
						<input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
						<i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
					</div>
				</div>
				<div class="container">
					<div id="search-overlay__results"></div>
				</div>
			</div>
    `);
  }

}

var liveSearch = new Search();
