<?php


namespace App\Helpers;


class AppResponseMessages
{

    const TOKEN_INVALID = 'Token is Invalid.';
    const TOKEN_EXPIRED = 'Token is Expired.';
    const TOKEN_NOT_FOUND = 'Authorization Token not found.';
    const TOKEN_REFR_SUCCESS = 'New Token generated successfully.';

    const USER_REG_FAILED = 'User Registration failed! Please try again later.';
    const USER_REG_SUCCESS = 'User Registration completed successfully.';
    const USER_LOGIN_INVALID_CRED =  'Please enter valid login credentials.';
    const USER_LOGIN_LOGGED_IN =  'User Logged in successfully.';

    const USER_REC_EXISTS = 'User Record exists.';
    const USER_REC_DSNT_EXISTS = 'User Record does not exists.';

    const SEVER_ERROR = 'Something went wrong please try again.';
    const RECORDS_FETCHED = 'Record(s) fetched successfully.';
    const RECORDS_NOTFOUND = 'No records found.';
    const REC_DSNT_EXISTS = 'Record does not exists.';

    const FORM_INVALID_FIELDS =  'Please enter valid details.';

    const RINGTONE_USER_UPLOAD_SUCCESS =  'Your uploaded file will be listed in the App once Admin approves it.';
}
