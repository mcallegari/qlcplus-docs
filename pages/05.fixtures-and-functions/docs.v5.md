---
title: 'Fixtures and Functions'
date: '14:33 23-06-2026'
taxonomy:
    category:
        - docs
---

The **Fixtures and Functions** context is the main editing workspace of the version 5 UI. 
It is where fixtures are added and arranged, channel capabilities are controlled, palettes are managed, and functions are created and edited.

It is laid out as four regions around a central viewing area:
* **Left panel** — fixture management and channel capability tools
* **Center view** — the active sub-context (Universe / DMX / 2D / 3D view)
* **Right panel** — function management
* **Bottom panel** — contextual editor (e.g. the Scene channel console)

![Fixtures_and_functions](Fixtures_and_functions.png "Fixtures_and_functions")

## Center view and sub-contexts

The center area is a `Loader` (`previewLoader`) that dynamically loads one of
four mutually exclusive **sub-contexts**. The active sub-context is tracked by
`contextManager.currentSubContext` and persisted in the C++ side.

A toolbar (`viewToolbar`) at the top of the center area lets the user switch
between them. The four entries are part of a single `ButtonGroup`
(`ffMenuBarGroup`), so only one can be active at a time.

| Sub-context | QML resource | `currentSubContext` value | Description |
|-------------|--------------|---------------------------|-------------|
| **Universe View** | [UniverseGridView.qml](UniverseGridView.qml) | `UNIGRID` | A DMX-address grid where fixtures are placed by universe address. Supports drag-to-move, cut and paste of fixtures. |
| **DMX View** | [DMXView.qml](DMXView.qml) | `DMX` | A flow of fixtures showing live channel values, with per-channel tools. |
| **2D View** | [2DView.qml](2DView.qml) | `2D` | A top-down 2D stage layout of fixtures. Has its own view settings panel. |
| **3D View** | [3DView.qml](3DView/) | `3D` | A 3D rendered stage. Falls back to `3DViewUnsupported.qml` when `qlcplus.is3DSupported` is false. |

### Switching and detaching sub-contexts

* **Left-click** a toolbar entry selects that sub-context. The `onCheckedChanged`
  handler calls `loadContext()`, which sets `currentViewQML` and
  `contextManager.currentSubContext`.
* **Right-click** a toolbar entry **detaches** that sub-context into its own
  window via `contextManager.detachContext(...)`. If the detached view was the
  active one, focus falls back to a neighbouring view (e.g. detaching DMX View
  falls back to Universe View). A detached entry hides itself
  (`visible: !ViewXX.detached`).

### Toolbar controls (right side)

Beyond the four sub-context selectors, the toolbar holds:

* **Universe filter** (`viewUniverseCombo`) — a combo box that filters the view
  to a single universe. Updates both `contextManager.universeFilter` and
  `fixtureManager.universeFilter`.
* **Zoom** (`ZoomItem`) — zoom out / zoom in buttons that call the loaded view's
  `setZoom(-0.5 / +0.5)`.
* **Settings** (`settingsButton`, the "bars" icon) — toggles the view's own
  settings overlay via `previewLoader.item.showSettings(checked)`. This button is
  only visible when the loaded view reports `hasSettings()` (e.g. the DMX and 2D
  views).

---

## Left panel

Implemented in [LeftPanel.qml](LeftPanel.qml), extending the shared
[SidePanel.qml](../SidePanel.qml). It is a collapsible panel: clicking a tool
button animates the panel open to show the related editor; the border can also
be dragged to resize it.

The panel hosts two independent button groups plus a set of selection tools at
the bottom.

### Fixture management group (`fxManagerGroup`)

These buttons load full-width editors into the panel. They are
*non-auto-exclusive*: clicking a checked button toggles it back off and closes
the panel.

| Button | Icon | Loads | Notes |
|--------|------|-------|-------|
| **Add Fixtures** | `fixture.svg` + add badge | [FixtureBrowser.qml](FixtureBrowser.qml) | Only visible with `App.AC_FixtureEditing` access. Browse the fixture library and drag fixtures into the view. |
| **Fixture Groups** | `group.svg` | [FixtureGroupManager.qml](FixtureGroupManager.qml) | Create and edit fixture groups. Clears `fixtureManager.searchFilter` on open; disables property editing on close. |
| **Palettes** | `palette.svg` | [PaletteManager.qml](PaletteManager.qml) | Create and manage palettes. |

### Channel capability group (`capabilitiesGroup`)

These buttons expose the channel **capabilities** of the currently selected
fixtures. Each carries a `counter` that reflects how many selected fixtures
expose that capability; when the counter drops to zero the button auto-unchecks.
Each opens a floating tool anchored to the right edge of the panel (parented to
`mainView`).

| Button | `objectName` | Tool | Purpose |
|--------|--------------|------|---------|
| **Intensity** | `capIntensity` | `IntensityTool` | Sets the master dimmer / intensity. Seeded with the current value on open; writes via `contextManager.setChannelValueByType(Intensity, ...)`. |
| **Shutter** | `capShutter` | `PresetsTool` (Shutter palette) | Select shutter / strobe presets. |
| **Position** | `capPosition` | `PositionTool` | Pan/Tilt control; exposes `panDegrees` / `tiltDegrees` ranges. |
| **Color** | `capColor` | `ColorTool` | RGB/WAUV color picking using `fixtureManager.colorsMask`; writes via `contextManager.setColorValue(...)`. |
| **Color Wheel** | `capColorWheel` | `PresetsTool` | Select color-wheel presets. |
| **Gobos** | `capGobos` | `PresetsTool` | Select gobo presets. |
| **Beam** | `capBeam` | `BeamTool` | Beam/zoom control; exposes `setZoomRange(min, max, inverted)`. |

Preset tools write their selection through
`fixtureManager.setPresetValue(fxID, chIdx, value)`.

### Selection tools (bottom of the panel)

After a flexible filler that pushes them to the bottom:

| Button | Icon | Action |
|--------|------|--------|
| **Highlight** | `fa_bolt` | `contextManager.highlightFixtureSelection()`. Its counter shows `selectedFixturesCount`. |
| **Pick a 3D point** | `fa_crosshairs` | Toggles `contextManager.positionPicking`. Only visible in the **3D** sub-context. Shortcut **CTRL+P**. |
| **Toggle multiple selection** | `multiple.svg` | Toggles `contextManager.multipleSelection` so several fixtures can be selected at once. |
| **Select / Deselect all** | `selectall.svg` | `contextManager.toggleFixturesSelection()`. Shortcut **CTRL+A**. |

---

## Right panel

Implemented in [RightPanel.qml](RightPanel.qml), also extending
[SidePanel.qml](../SidePanel.qml). This is the **function** side of the context:
it manages the function tree and loads the per-type function editors into the
panel.

`selectedItemsCount` combines selected functions and folders and drives the
enabled/visible state (via `counter`) of several buttons.

### Buttons (top to bottom)

| Button | Icon | Action |
|--------|------|--------|
| **Function Manager** | `functions.svg` | Toggles [FunctionManager.qml](FunctionManager.qml), the function tree. Unchecking clears the function selection and editor. |
| **Timing Settings** | `fa_stopwatch` | Loads `TimingUtils.qml`. Only visible in the Show Manager (`inShowManager`). |
| **Add a new function** | `fa_plus` (green) | Opens `AddFunctionMenu`. Only visible with `App.AC_FunctionEditing`. See *Creating functions* below. |
| **Delete** | `fa_minus` (crimson) | Opens a confirmation popup listing the selected items, then deletes the selected folders and functions. If the current Show is among them, the Show Manager is reset first. Enabled when items are selected and not currently editing. |
| **Rename** | `rename.svg` | Opens a rename popup (`PopupRenameItems`). When multiple items are selected, a numbering option is shown for batch renaming. |
| **Clone** | `fa_clone` | `functionManager.cloneFunctions()` on the selected functions. |
| **Show function usage** | `fa_sitemap` | Loads `UsageList.qml` for the first selected function, showing where it is referenced. |
| **Autostart** | `autostart.svg` | Sets/unsets the selected function as the project's `startupFunctionID`. |
| **Function Preview** | `fa_play` | Toggles `functionManager.previewEnabled` — live-runs the selected function for preview. |
| **Toggle multiple selection** | `multiple.svg` | Toggles `showManager.multipleSelection`. Only visible in the Show Manager. |
| **Reset dump channels** | `fa_xmark` | `contextManager.resetDumpValues()`. Shortcut **CTRL+R**. |

### Creating functions

`createFunctionAndEditor(fType)` drives function creation:

* **Audio / Video** functions open a `FileDialog` first to pick the media files.
  A single file opens its editor directly; multiple files create several
  functions and open the Function Manager instead.
* **Show** functions switch the whole UI to the Show Manager context
  (`mainView.switchToContext("SHOWMGR", ...)`).
* All other types create the function and load the matching editor resource
  (returned by `functionManager.getEditorResource(...)`) into the panel.

`requestEditor(funcID, funcType)` opens the editor for an existing function
(requires `App.AC_FunctionEditing`); passing `funcID === -1` collapses the
panel. The panel also listens for `requestView` signals from loaded editors via
the base `SidePanel` `Connections` block, to drill into nested views.

---

## Bottom panel

Implemented in [BottomPanel.qml](BottomPanel.qml). Hidden by default
(`visible: false`), it slides up from the bottom to host a contextual editor —
most notably the **Scene** channel console (`SceneEditor`). When visible it
reduces the height of the left panel, right panel and center view accordingly.

* **Expand / Collapse** (`expandButton`, chevron icon) — animates the panel
  between `collapseHeight` and `expandedHeight` (one third of the main view).
  The top border can also be dragged vertically to resize it freely.
* **Copy to same-type fixtures** (`fa_copy`) — only shown when the loaded editor
  is a Scene editor; copies the selected channel values to all fixtures of the
  same type (`sceneEditor.pasteToAllFixtureSameType()`). Enabled only when
  channels are selected.
* **Toggle multiple channel selection** (`multiple.svg`) — only shown for the
  Scene editor; toggles multi-channel selection on the loaded editor.

The editor content itself is loaded into `editorLoader` from `editorSource`, and
is cleared whenever the panel is hidden or collapsed.

---

## Shared side-panel behaviour

Both the left and right panels derive from [SidePanel.qml](../SidePanel.qml),
which provides:

* **Open/close animation** (`animatePanel`) — animates the panel `width` between
  `collapseWidth` and `expandedWidth` over 100 ms.
* **Draggable border** — the gradient border can be dragged to resize the panel.
* **Asynchronous content loading** — the inner `Loader` is `asynchronous: true`
  so instantiating heavy editors (e.g. the EFX preview canvas) does not freeze
  the open/close animation.
* **`requestView` relay** — loaded editors can request a nested view via the
  `requestView(ID, qmlSrc, back)` signal, handled centrally here.
