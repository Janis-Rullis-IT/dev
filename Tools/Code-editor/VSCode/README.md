# VS Code

## Install

* [Download.](https://code.visualstudio.com/Download)
* Import [settings](https://github.com/Janis-Rullis-IT/dev/blob/101537b7e7d97ce5b769210d09d04ee3067282bd/Tools/Code-editor/VSCode/settings.json)
* Use Vetur plugin for vue.js files. Just open the file and the plugin will be suggested.

## Appearance

* View/Move Sidebar Right.
* Alt Edit/Preferences/Color Theme - Monokai.
* View/Toggle Minimap.

## [Shortcuts](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-linux.pdf)

* Fullscreen - F11

## Settings - File/Preferences

You can also just copy these 2 files into `~/.config/Code/User/`

* [settings.json](settings.json)
* [keybindings.json](keybindings.json)

## Keep open tabs

If you click on more than 2 files, than only 2 tabs will be opened and the last one will be replaced with the new file.

### 1) Disable preview

```json
{"workbench.editor.enablePreview": false,
"workbench.editor.enablePreviewFromQuickOpen": false}
```
   
### 2) Keep open

Click on the tab you wish to keep open and select 'Keep open' this will prevent replacing this tab with a new one.

## Plugins

* [highlight-matching-tag](https://marketplace.visualstudio.com/items?itemName=vincaslt.highlight-matching-tag)
* ElixirLs.
* Darcula.
* Vetur.
* vscode-elixir.

## [List functions](https://stackoverflow.com/a/36154390)

* CTRL+Shift+O
