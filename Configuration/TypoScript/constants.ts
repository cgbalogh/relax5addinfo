
plugin.tx_relax5addinfo_addinfo {
    view {
        # cat=plugin.tx_relax5addinfo_addinfo/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:relax5addinfo/Resources/Private/Templates/
        # cat=plugin.tx_relax5addinfo_addinfo/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:relax5addinfo/Resources/Private/Partials/
        # cat=plugin.tx_relax5addinfo_addinfo/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:relax5addinfo/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_relax5addinfo_addinfo//a; type=string; label=Default storage PID
        storagePid =
    }
}

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

plugin.tx_relax5addinfo_addinfo {
    settings {
        # cat=plugin.tx_relax5addinfo_addinfo//y; type=int+; label=ID for AJAX calls.
        ajaxCallId = 111200

        # cat=plugin.tx_relax5addinfo_addinfo//z; type=boolean; label=Enable autoAjax feature from extbase_ajax.
        autoAjax = 0
    }
}