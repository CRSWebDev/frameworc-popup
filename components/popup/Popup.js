oc.registerControl('popup', class extends oc.ControlBase {
    init() {
        this.configOpenAfterHours = parseInt(this.config.showAgainAfterHours) * 60 * 60 * 1000; // Convert hours to milliseconds

        this.isRecurring = this.configOpenAfterHours > 0;

        this.lastOpen = localStorage.getItem(`fwcPopup${this.config.popup}`);
        console.log(this.lastOpen);
    }

    connect() {
        this.listen('click', '.Popup-close, .Popup-overlay, .Button', this.closePopup);

        if (!this.isRecurring) {
            return;
        }

        if (!this.lastOpen || (Date.now() - this.configOpenAfterHours) > parseInt(this.lastOpen)) {
            setTimeout(() => {
                this.openPopup();
            }, parseInt(this.config.showAfterSeconds) * 1000);
        }
    }

    closePopup(event) {
        event.preventDefault();
        this.element.classList.remove('isActive');

        localStorage.setItem(`fwcPopup${this.config.popup}`, Date.now().toString());
    }

    openPopup() {
        this.element.classList.add('isActive');
    }
});
