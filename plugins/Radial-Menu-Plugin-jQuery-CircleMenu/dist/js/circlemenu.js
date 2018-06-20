/*
*	======== CIRCLE MENU ==========
*	version : 1.0	
*	Author : Mochamad Arif Septian Putera | arif.fufu@gmail.com
*	Using 3rd party code : Please install latest Lodash and JQuery to make this code works.
*/
function CircleMenu(target, data, selectedByKey, opt, func) {
	this.data = null;
	this.items = [];
	this.steps = null;
	this.lastPos = [];
	this.currentSelected = 0;
	this.animate = false;

	this.lastItemInTop = null;
	this.lastItemInBottom = null;

	this.onInit = func.onInit;
	this.onChangeBegin = func.onChangeBegin;
	this.onChangeComplete = func.onChangeComplete;
	this.onLoadPageComplete = func.onLoadPageComplete;

	this.init = function() {
		var that = this;

		if(data && data.length > 0) {
			that.createSteps();
			that.createItems();

			this.onInit ? this.onInit(that.currentSelected) : null;

			_.forEach(that.items, function(d, i){
				d.find('a').on('click', function(){
					var url = $(this).attr('href');

					that.goto(url);

					return false;
				});
			});

			$('.cm-button-prev').on('click', function(){
				that.prev();
			});
			$('.cm-button-next').on('click', function(){
				that.next();
			});
		}else {
			console.log('%c CircleMenu ', 'background: #4bd187; color: #333', 'No data');
			target.hide();
		}
	}

	this.createItems = function() {
		var that = this;
		var cm_items = target.find('.cm-items');
		var offset = _.findIndex(data, [opt.key, selectedByKey]);

		_.forEach(data, function(d, i){
			cm_items.append('<li id="item-'+i+'" class="cm-item"><a href="'+d.url+'" title="'+d.label+'">'+d.label+'</a></li>');
			that.items.push($('#item-'+i));
		});

		that.select(offset, {init: true});
	}

	this.createSteps = function() {
		var that = this;
		var theta = [], steps = [], positiveSteps = [];
		var widePerItem = 30;

		var max_dat = data.length;

		_.forEach(data, function(d, i){
			var posX = 0, posY = 0;

			if(i <= Math.round((max_dat - 1) / 2)) {
				theta.push((widePerItem / 360) * i * Math.PI);

				posX = Math.round((550 / 2) * (Math.cos(theta[i])));
				posY = -Math.round((550 / 2) * (Math.sin(theta[i])));

				steps.push({ left: posX, top: posY });
			}else {
				var x = i - Math.round((max_dat - 1) / 2);
				positiveSteps.push({ left: steps[x].left, top: steps[x].top * -1 });
			}
		});

		if(positiveSteps.length > 0) {
			that.lastItemInTop = steps.length - 1;
			that.lastItemInBottom = steps.length;

			that.steps = _.concat(steps, _.reverse(positiveSteps));
		}
	}

	this.next = function() {
		var that = this, offset = that.currentSelected;
		var min_offset = 0, max_offset = data.length - 1;

		offset = offset < max_offset ? offset + 1 : min_offset;

		this.select(offset, {next: true});
	}

	this.prev = function() {
		var that = this, offset = that.currentSelected;
		var min_offset = 0, max_offset = data.length - 1;

		offset = offset > min_offset ? offset - 1 : max_offset;

		this.select(offset, {prev: true});
	}

	this.goto = function(targetSelected) {
		var that = this;
		var offset = _.findIndex(data, [opt.key, targetSelected]);

		that.select(offset, {goto: true});
	}

	this.select = function(offset, selectOpt) {
		var that = this, max_dat = data.length;
		var cm_label = $('.cm-selected-label');

		if(offset >= 0) {
			if(!that.animate) {
				that.animate = true;

				var newPos = [];
				var lastItem = null, lastItem_bot = null;

				that.onChangeBegin ? that.onChangeBegin() : null;

				var completeAnimation = function(i) {
					cm_label.find('span').text(data[offset].label);
					cm_label.find('span').fadeIn(300);

					that.lastPos[i] = {
						left: newPos[i].css.left,
						top: newPos[i].css.top,
					}

					if(i == offset) {
						that.onChangeComplete ? that.onChangeComplete(data[i]) : null;
					}

					that.animate = false;
				}

				cm_label.find('span').fadeOut(300);

				_.forEach(that.items, function(d, i){
					d.fadeIn(800, function(){
						d.removeClass('selected');
					});

					var pos_id = (i - offset + max_dat) % max_dat;

					if(pos_id == that.lastItemInTop) {
						lastItem = i;
					}

					if(pos_id == that.lastItemInBottom) {
						lastItem_bot = i;
					}

					if(selectOpt && selectOpt.init) {
						that.lastPos.push({
							left: that.steps[pos_id].left,
							top: that.steps[pos_id].top,
						});
					}

					newPos.push({
						left: that.steps[pos_id].left,
						top: that.steps[pos_id].top,
						onComplete: completeAnimation,
						onCompleteParams:[i]
					});

					if(offset == i) {
						d.fadeOut(100, function(){
							d.addClass('selected');
						});
					}
				});

				if(selectOpt && selectOpt.goto) {
					_.forEach(that.items, function(d, i){
						d.hide();
					});

					that.animateList(newPos);

					setTimeout(function() {
						_.forEach(that.items, function(d, i){
							!d.hasClass('selected') ? d.fadeIn() : null;
						});
					}, 1000);
				}else {
					if(selectOpt && selectOpt.init) {
						that.animateList(newPos);
					}else {
						that.animateList(newPos, selectOpt, lastItem, lastItem_bot);
					}
				}

				that.currentSelected = offset;
			}
		}else {
			console.log('%c CircleMenu ', 'background: #4bd187; color: #333', 'Can\'t find selected item "'+selectedByKey+'" with offset "'+offset+'"');
			target.hide();
		}
	}

	this.animateList = function(newPos, selectOpt, lastItem, lastItem_bot) {
		var that = this;

		_.forEach(that.items, function(d, i){
			if(i == lastItem && selectOpt && selectOpt.next == true) { //perform next animation only for last in top section
				d.fadeOut(function(){
					TweenMax.fromTo(d, 1, that.lastPos[i], newPos[i]);

					setTimeout(function() {
						d.fadeIn();
					}, 800);
				});
			}else if(i == lastItem_bot && selectOpt && selectOpt.prev == true) { //perform previous animation only for last in bottom section
				d.fadeOut(function(){
					TweenMax.fromTo(d, 1, that.lastPos[i], newPos[i]);

					setTimeout(function() {
						d.fadeIn();
					}, 800);
				});
			}else {
				TweenMax.fromTo(d, 1, that.lastPos[i], newPos[i]); //perform next-previous animation for all items
			}
		});
	}

	this.init();
}