<?php

    /**
     * Frame - A lightweight PHP framework
     */

    // -------------------------
    // Frame version
    // -------------------------
    define ( 'FAME_VERSION' , '1.0.0' );

    // -------------------------
    // Loading user session
    // -------------------------
     session_start(); //don't have to place this instruction here because it is to the user to
     //manager its session  as he want. And in new version i will add a SESSION module which will 
     //be more secure thant php native session management system

    // -------------------------
    // Loading required files
    // -------------------------
    require __DIR__ . '/FrameCache.php';
    require __DIR__ . '/FrameController.php';
    require __DIR__ . '/FrameDataBase.php';
    require __DIR__ . '/FrameException.php';
    require __DIR__ . '/FrameHTTPQuery.php';
    require __DIR__ . '/FrameHTTPResponse.php';
    require __DIR__ . '/FrameKernel.php';
    require __DIR__ . '/FrameLogger.php';
    require __DIR__ . '/FrameModel.php';
    require __DIR__ . '/FrameRedirection.php';
    require __DIR__ . '/FrameRouter.php';
    require __DIR__ . '/FrameView.php';

    // -------------------------
    // Loading user files
    // -------------------------
    if (file_exists(FRAME_CONFIG_PATH . '/require.php')) {
        require FRAME_CONFIG_PATH . '/require.php';
    }

    try {
        $kernel = new \Frame\core\FrameKernel();
        $kernel->launch_kernel();
    } catch (\Frame\Core\Exception $e) {
        (new \Frame\Core\FrameView())->generateErrorFrameException($e);
    } catch (\ReflectionException $e) {
        (new \Frame\Core\FrameView())->generateErrorReflectionException($e);
    }

