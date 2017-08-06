import { NgModule }           from '@angular/core';
import { BrowserModule }      from '@angular/platform-browser';

/* App Root */
import { AppComponent }       from './app.component';
import { NewSubComponent } from './new-sub/new-sub.component';

@NgModule({
    imports:      [
        BrowserModule
    ],

    declarations: [ AppComponent, NewSubComponent ],
    bootstrap:    [ AppComponent ]
})
export class AppModule {}