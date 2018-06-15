
plugin.tx_relax5addinfo_addinfo {
    view {
        templateRootPaths.0 = EXT:relax5addinfo/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_relax5addinfo_addinfo.view.templateRootPath}
        partialRootPaths.0 = EXT:relax5addinfo/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_relax5addinfo_addinfo.view.partialRootPath}
        layoutRootPaths.0 = EXT:relax5addinfo/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_relax5addinfo_addinfo.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_relax5addinfo_addinfo.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_relax5addinfo._CSS_DEFAULT_STYLE (
        textarea.f3-form-error {
                background-color:#FF9F9F;
                border: 1px #FF0000 solid;
        }

        input.f3-form-error {
                background-color:#FF9F9F;
                border: 1px #FF0000 solid;
        }

        .{extension.cssClassName} table {
                border-collapse:separate;
                border-spacing:10px;
        }

        .{extension.cssClassName} table th {
                font-weight:bold;
        }

        .{extension.cssClassName} table td {
                vertical-align:top;
        }

        .typo3-messages .message-error {
                color:red;
        }

        .typo3-messages .message-ok {
                color:green;
        }
)

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

page.includeJSFooter {
  relax5addinfoJs = EXT:relax5addinfo/Resources/Public/Scripts/relax5addinfo.js
  relax5addinfoJs.forceOnTop = 0
}

page.includeCSS {
   relax5addinfoCss = EXT:relax5addinfoCss/Resources/Public/Styles/relax5addinfoCss.css
   relax5addinfoLess = EXT:relax5addinfoCss/Resources/Public/Less/relax5addinfoCss.less
}

# Ajax configuration
relax5addinfo = PAGE
relax5addinfo {
	#disable all headers
	config {
		disableAllHeaderCode = 1
		disablePrefixComment = 1
		additionalHeaders = Content-Type:text/html
		xhtml_cleaning = 0
		no_cache = 1
		admPanel = 0

		language = en
		locale_all = en_UK.utf-8
		metaCharset = utf-8
		sys_language_uid = 0
	}
}

plugin.tx_relax5addinfo_addinfo {
	settings {
		autoAjax = {$plugin.tx_relax5addinfo_addinfo.settings.autoAjax}
		ajaxCallId = {$plugin.tx_relax5addinfo_addinfo.settings.ajaxCallId}
    }
}

# actual pagetype
relax5addinfo_ajax < relax5addinfo
relax5addinfo_ajax {
	10 < tt_content.list.20.relax5addinfo_addinfo
	typeNum = {$plugin.tx_relax5addinfo_addinfo.settings.ajaxCallId}
}

[globalVar = GP:L = 1]
	relax5addinfo_ajax.config.language = de
	relax5addinfo_ajax.config.locale_all = de_DE.utf-8
	relax5addinfo_ajax.config.sys_language_uid = 1
[global]
