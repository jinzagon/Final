const {app, BrowserWindow} = require('electron') 
const url = require('url') 
const path = require('path') 
const {shell} = require('electron');
const childProcess = require("child_process");
const { execFile } = require('child_process');
const { ipcMain } = require('electron');


let win 


function createWindow() { 
   win = new BrowserWindow({width: 900, height: 680,webPreferences: {     preload: path.join(__dirname, 'preload.js'),
      nodeIntegration: true,
      "webPreferences":{
         "webSecurity":false
       },
      webSecurity: false, experimentalFeatures: true
      }});
   win.setFullScreen(true)
   win.setMenuBarVisibility(false)
   win.loadURL(url.format ({ 
      pathname: path.join(__dirname, 'index.html'), 
      protocol: 'file:', 
      slashes: true
   })) 
   
}  


ipcMain.on('open-app', (e, path) => {
  const child = execFile(path, {cwd: 'C:\\test\\'}, (error, stdout, stderr) => {
  if (error) {
    throw error;
  }
  console.log(stdout);
return stdout;
});
  e.returnValue = child;
});





app.on('ready', createWindow) 

