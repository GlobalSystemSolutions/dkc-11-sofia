<?php

namespace App\Traits\Utilities;

trait FlashMessageTrait {

    public function setLoginErrorFlashMessage($loginType, $locale)
    {
        switch ($locale) {
            case 'bg':
                $message = config('lab-results.login_type.' . $loginType . '.' . $locale . '.' . 'failure');
                flash()->error('', $message);
                break;

            case 'en':
                $message = config('lab-results.login_type.' . $loginType . '.' . $locale . '.' . 'failure');
                flash()->error('', $message);
                break;

            default:
                $message = config('lab-results.login_type.' . $loginType . '.' . $locale . '.' . 'failure');
                flash()->error('', $message);
                break;
        }
    }

    public function setLoginSuccessFlashMessage($loginType, $locale)
    {
        switch ($locale) {
            case 'bg':
                $message = config('lab-results.login_type.' . $loginType . '.' . $locale . '.' . 'success');
                flash()->success('', $message);
                break;

            case 'en':
                $message = config('lab-results.login_type.' . $loginType . '.' . $locale . '.' . 'success');
                flash()->success('', $message);
                break;

            default:
                $message = config('lab-results.login_type.' . $loginType . '.' . $locale . '.' . 'success');
                flash()->success('', $message);
                break;
        }
    }
}
