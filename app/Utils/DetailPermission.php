<?php

namespace Solvre\Utils;


/**
 *
 *
 * @access public
 * @author maveius
 * @package Model
 */
class DetailPermission extends Permission
{

    const CREATE_PROJECTS = 'CREATE_PROJECTS';
    const CREATE_TASKS = 'CREATE_TASKS';
    const MANAGE_WORKFLOW = 'MANAGE_WORKFLOW';
    const CREATE_BUILD_PLAN = 'CREATE_BUILD_PLAN';
    const CREATE_DEPLOYMENT_PLAN = 'CREATE_DEPLOYMENT_PLAN';
    const EDIT_BUILD_PLAN = 'EDIT_BUILD_PLAN';
    const EDIT_DEPLOYMENT_PLAN = 'EDIT_DEPLOYMENT_PLAN';
    const RUN_BUILD_PLAN = 'RUN_BUILD_PLAN';
    const RUN_DEPLOYMENT_PLAN = 'RUN_DEPLOYMENT_PLAN';
    const CREATE_OWN_PROJECT_FIELDS = 'CREATE_OWN_PROJECT_FIELDS';
    const CREATE_OWN_DASHBORDS = 'CREATE_OWN_DASHBORDS';
    const CREATE_OWN_AGILE_BOARDS = 'CREATE_OWN_AGILE_BOARDS';
    const ADD_WIDGET = 'ADD_WIDGET';
    const CREATE_CQL = 'CREATE_CQL';
    const DEFINE_STATUS_ACTIONS = 'DEFINE_STATUS_ACTIONS';
    const IS_CODE_REVIEW_MASTER = 'IS_CODE_REVIEW_MASTER';
    const PLANING_SPRINT = 'PLANING_SPRINT';
    const CREATE_VERSIONING = 'CREATE_VERSIONING';
    const CREATE_RELEASE = 'CREATE_RELEASE';
    const ASSIGN_RELEASE_WITH_BUILD_PLAN = 'ASSIGN_RELEASE_WITH_BUILD_PLAN';
    const TIME_TRACKING = 'TIME_TRACKING';
    const DELETE_PROJECTS = 'DELETE_PROJECTS';
    const DELETE_TASKS = 'DELETE_TASKS';
    const CHANGE_STATUS = 'CHANGE_STATUS';
    const DELETE_BUILD_PLANS = 'DELETE_BUILD_PLANS';
    const DELETE_DEPLOYMENT_PLANS = 'DELETE_DEPLOYMENT_PLANS';
    const DELETE_PROJECT_FIELDS = 'DELETE_PROJECT_FIELDS';
    const DELETE_OWN_DASHBOARDS = 'DELETE_OWN_DASHBOARDS';
    const DELETE_DASHBOARDS = 'DELETE_DASHBOARDS';
    const DELETE_AGILE_BOARDS = 'DELETE_AGILE_BOARDS';
    const DELETE_OWN_AGILE_BOARDS = 'DELETE_OWN_AGILE_BOARDS';
    const DELETE_WIDGET = 'DELETE_WIDGET';
    const CREATE_QUIK_FILTERS = 'CREATE_QUIK_FILTERS';
    const DELETE_QUICK_FILTERS = 'DELETE_QUICK_FILTERS';
    const DELETE_VERSIONING = 'DELETE_VERSIONING';
    const DELETE_RELEASE = 'DELETE_RELEASE';
    const DETEACH_RELEASE_WITH_BUILD_PLAN = 'DETEACH_RELEASE_WITH_BUILD_PLAN';
    const INSTALL_PLUGIN = 'INSTALL_PLUGIN';
    const UNINSTALL_PLUGIN = 'UNINSTALL_PLUGIN';
}

?>