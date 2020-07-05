<?php


namespace App\Enums;


class UserRolesEnum
{
    private const SUPER_ADMIN = 'super_admin'; //website-owner
    private const ADMIN = 'admin'; //owner of organization
    private const FACULTY = 'faculty'; //teachers
    private const STUDENT = 'student'; //students
    private const OTHER_STAFF = 'other_staff'; //other co-workers
}
