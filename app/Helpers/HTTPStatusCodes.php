<?php


namespace App\Helpers;


class HTTPStatusCodes
{
    const _OK = 200;
    const _CREATED = 201;
    const _UPDATED = 200;
    const _DELETED = 204;
    const _NORECORDS =204;
    const _CONFLICT_RECORD = 409;
    const _SUCCESS = 'success';
    const _FAILED = 'failed';
    const _BADREQUEST = 400;
    const _UNAUTHORIZED = 401;
    const _SERVER_ERROR = 500;
}
