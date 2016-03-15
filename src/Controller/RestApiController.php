<?php

namespace Casebox\RestBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcher;

/**
 * Class RestApiController
 * @Prefix("/c/{coreName}/api")
 */
class RestApiController extends FOSRestController
{
    /**
     * @Post("/browser", name="rest_api_browser")
     * @RequestParam(
     *     name="action",
     *     requirements="(paste|saveFile|confirmUploadRequest|delete|restore|getObjectsForField)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data")
     * @RequestParam(
     *     name="formHandler",
     *     strict=false,
     *     allowBlank=true,
     *     requirements="(1|0)",
     *     description="Allowed from handler."
     * )
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function browserAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/browser/actions", name="rest_api_browser_actions")
     * @RequestParam(name="action", requirements="(copy|move|shortcut)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function browserActionsAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/browser/tree", name="rest_api_browser_tree")
     * @RequestParam(
     *     name="action",
     *     requirements="(getChildren|delete|rename|getRootProperties)", description="Action
     *     method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function browserTreeAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/browser/view", name="rest_api_browser_view")
     * @RequestParam(name="action", requirements="(getChildren|delete|rename)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function browserViewAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/favorites", name="rest_api_favorites")
     * @RequestParam(name="action", requirements="(create|read|delete)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function favoritesAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/files", name="rest_api_files")
     * @RequestParam(
     *     name="action",
     *     requirements="(getProperties|getContent|saveContent|restoreVersion|deleteVersion|checkExistentContents|saveProperties)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function filesAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/notifications", name="rest_api_notifications")
     * @RequestParam(
     *     name="action",
     *     requirements="(getList|getNew|updateLastSeenActionId|markAsRead|markAllAsRead)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function notificationsAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/objects", name="rest_api_objects")
     * @RequestParam(
     *     name="action",
     *     requirements="(load|create|save|getAssociatedObjects|getPluginsData|getBasicInfoForId|setSubscription|addComment|updateComment|removeComment|setOwnership)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @RequestParam(
     *     name="formHandler",
     *     strict=false,
     *     allowBlank=true,
     *     requirements="(1|0)",
     *     description="Allowed from handler."
     * )
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function objectsAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/plugins/comments", name="rest_api_plugins_comments")
     * @RequestParam(
     *     name="action",
     *     requirements="(load|create|save|getAssociatedObjects|getPluginsData|getBasicInfoForId|setSubscription|addComment|updateComment|removeComment|setOwnership)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function pluginsCommentsAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/path", name="rest_api_path")
     * @RequestParam(name="action", requirements="(getPath|getPidPath)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function pathAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/security", name="rest_api_security")
     * @RequestParam(
     *     name="action",
     *     requirements="(getUserGroups|createUserGroup|updateUserGroup|destroyUserGroup|searchUserGroups|getObjectAcl|addObjectAccess|updateObjectAccess|destroyObjectAccess|setInheritance|getActiveUsers|removeChildPermissions)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function securityAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/system", name="rest_api_system")
     * @RequestParam(name="action", requirements="(getCountries|getTimezones)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function systemAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/search", name="rest_api_search")
     * @RequestParam(name="action", requirements="(load|query)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function searchAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/state/dbprovider", name="rest_api_state_dbprovider")
     * @RequestParam(name="action", requirements="(read|set|saveGridViewState)", description="Action method.")
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function stateDbProviderAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = $this->get('casebox_core.service_state.dbprovider')->$action($data);

        return $this->view()->setData($result);
    }

    /**
     * @Post("/tasks", name="rest_api_tasks")
     * @RequestParam(
     *     name="action",
     *     requirements="(setUserStatus|complete|close|reopen|updateDates)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function tasksAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/templates", name="rest_api_templates")
     * @RequestParam(
     *     name="action",
     *     requirements="(readAll|getTemplatesStructure|updateSolrData)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function templatesAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/user/login", name="rest_api_user_login")
     * @RequestParam(name="username", description="Username.")
     * @RequestParam(name="password", description="Password.")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function userLoginAction(ParamFetcher $fetcher)
    {
        $username = $fetcher->get('username');
        $password = $fetcher->get('password');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/user/logout", name="rest_api_user_logout")
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function userLogoutAction(ParamFetcher $fetcher)
    {
        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/user", name="rest_api_user")
     * @RequestParam(
     *     name="action",
     *     requirements="(getLoginInfo|login|logout|setLanguage|setTheme|uploadPhoto|removePhoto|getAccountData|getProfileData|saveProfileData|saveSecurityData|verifyPassword|verifyPhone|getTSVTemplateData|enableTSV|disableTSV|getNotificationSettings|setNotificationSettings)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @RequestParam(
     *     name="formHandler",
     *     strict=false,
     *     allowBlank=true,
     *     requirements="(1|0)",
     *     description="Allowed from handler."
     * )
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function userAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }

    /**
     * @Post("/users/groups", name="rest_api_users_groups")
     * @RequestParam(
     *     name="action",
     *     requirements="(getChildren|getUserData|getAccessData|saveAccessData|addUser|associate|deassociate|deleteUser|changePassword|sendResetPassMail|renameUser|renameGroup|disableTSV|setUserEnabled)",
     *     description="Action method."
     * )
     * @RequestParam(name="data", array=true, strict=false, nullable=true, description="An array of data.")
     * @RequestParam(
     *     name="formHandler",
     *     strict=false,
     *     allowBlank=true,
     *     requirements="(1|0)",
     *     description="Allowed from handler."
     * )
     * @param ParamFetcher $fetcher
     *
     * @return View
     */
    public function usersGroupsAction(ParamFetcher $fetcher)
    {
        $action = $fetcher->get('action');
        $data = $fetcher->get('data');

        $result = null;

        return $this->view()->setData($result);
    }
}
