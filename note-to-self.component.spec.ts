import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NoteToSelfComponent } from './note-to-self.component';

describe('NoteToSelfComponent', () => {
  let component: NoteToSelfComponent;
  let fixture: ComponentFixture<NoteToSelfComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NoteToSelfComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NoteToSelfComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
