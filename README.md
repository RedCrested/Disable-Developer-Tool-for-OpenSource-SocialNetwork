# Disable Developer Tool Window and Right Click

Implementation of [disble-devtool](https://github.com/theajack/disable-devtool) library into OSSN. The 
disable-devtool disables all access to the devtools, preventing 'code porting' via the devtools

This library has the following features:

- Support configurable whether to disable the right-click menu
- Disable shortcut keys such as f12 and ctrl+shift+i
- Support recognition to open developer tools from browser menu bar and close the current page
- Developers can bypass the disable (url parameters are encrypted with tk and md5)
- Multiple monitoring modes, support almost all browsers (IE, 360, qq browser, FireFox, Chrome, Edge...)
- Highly configurable, minimalist to use, compact
- Identify the real mobile terminal and the browser developer tool to set the plug-in forged mobile terminal to save performance for the mobile terminal
- Support for identifying developer tools close events
- Support configurable whether to disable selection, copy, cut, paste function
- Support to identify eruda and vconsole debugging tools


## How to setup the options

After enabling the component, open the Disable Developer Tool option in the Config menu and set the options as you wish.

![](https://www.redcrested.net/components/DisableDevTool/screenshot-admin.png)


## Limitations

The component was tested in OSSN 6.1 and 6.4, free and premium versions. Maybe some adjustments are required in older versions. In this case, **use at your own risk**.

## How to support

I'm releasing this component for free. But, if you want to help me to make more components, click on the button down below and [pay me a coffee](https://www.buymeacoffee.com/redcrested). It's up to you how much coffee I'll drink 😉

[![](https://redcrested.net/res/img/button.png)](https://www.buymeacoffee.com/redcrested)

## Version

- 1.2 
    - Fixed loop when devtools is open before page load - #2
- 1.1
    - Improved the verification for default values after component activation - #1
    - Changed the license type in XML file
    - Package disable-devtool upgraded from 0.3.1 version to 0.3.4
    - Admin configuration moved to Red Crested Components main menu
    
- 1.0
    - Initial version

    
## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
Go to [Red Crested License](http://www.redcrested.net/license) to read the last version of our terms.