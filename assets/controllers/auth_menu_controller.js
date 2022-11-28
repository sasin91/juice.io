import {Controller} from '@hotwired/stimulus';
import { useTransition } from 'stimulus-use';

/*
* The following line makes this controller "lazy": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['menu']

    connect() {
        this.menuTarget.hidden = true

        useTransition(this, {
            element: this.menuTarget,
            enterActive: 'fade-enter-active',
            enterFrom: 'fade-enter-from',
            enterTo: 'fade-enter-to',
            leaveActive: 'fade-leave-active',
            leaveFrom: 'fade-leave-from',
            leaveTo: 'fade-leave-to',
            hiddenClass: 'hidden',
            transitioned: !this.menuTarget.hidden,
        });
    }

    toggleMenu() {
        this.menuTarget.hidden = !this.menuTarget.hidden
        this.toggleTransition();
    }
}
