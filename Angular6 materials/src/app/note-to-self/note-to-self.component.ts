
/* import { Component, OnInit } from '@angular/core';
import { LumenService } from './services/lumen.service';

import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { NgbdModalBasic } from './model-basic';

@Component({
  selector: 'app-note-to-self',
  templateUrl: './note-to-self.component.html',
  styleUrls: ['./note-to-self.component.css'],
  providers: [LumenLaravelService]
})
export class NoteToSelfComponent {
  constructor(private _lumenService: LumenService) {
    this.onLoad();
  }


  onLoad() {
    var result = this._lumenService.getTodos();
    result.subscribe((data) => {
      this.todos = data.data;
    });

  }

  newNote() {
    var result;
    var newNote = {
      id: this.id,
      title: this.title,
      status: 0
    };
    result = this._lumenService.saveNote(newNote);
    result.subscribe((data) => {
      this.todos = data.data;
      this.title = '';
    };
  }


  editNote(todo) {
    this.index = todo.id;
    this.selectedTodo = todo.title;
    this.id = todo.id;
    this.isInEdit = false;
  }

  updateTodo(id) {
    var todo = {
      id: this.id,
      title: this.selectedTodo
    };
    var result = this._lumenService.updateTodo(todo);
    result.subscribe((data) => {
      this.todos.forEach(element => {
        if (element.id == id) {
          element.title = todo.title;
          this.index = 0;
        }
      });
    },
      (errorData) => {
        this.index = id;
        this.isInEdit = true;
      });
  }

  deleteNote(note) {
    var result;
    result = this._lumenService.deleteNote(note);
    result.subscribe((data) => {
      var index = this.todos.indexOf(note);
      this.todos.splice(index, 1);
      this.todos = data.data;
    });
  }
}
*/
