import {Controller} from '@hotwired/stimulus';
import { useTransition } from 'stimulus-use';

/*
* The following line makes this controller "lazy": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['content']

    connect() {
        this.contentTarget.hidden = true

        useTransition(this, {
            element: this.contentTarget,
            enterActive: 'fade-enter-active',
            enterFrom: 'fade-enter-from',
            enterTo: 'fade-enter-to',
            leaveActive: 'fade-leave-active',
            leaveFrom: 'fade-leave-from',
            leaveTo: 'fade-leave-to',
            hiddenClass: 'hidden',
        });
    }

    toggle() {
        this.contentTarget.hidden = !this.contentTarget.hidden
        this.toggleTransition();
    }
}
