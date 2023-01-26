--
-- v0 : addr_spec sans domain-literal ni quoted-string
--
create or replace function atext () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '[^][()<>:;@\\,."[:space:][:cntrl:]]' ;

create or replace function atom () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || atext() || '+)' ;

create or replace function dot_atom () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE grâce à la protection du point par "\"
return '(' || atom() || '(\.' || atom() || ')*)' ;

create or replace function addr_spec_v0 () returns TEXT
  -- v0 : addr_spec sans domain-literal ni quoted-string
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || dot_atom() || '@' || dot_atom() || ')' ;

--
-- v1 : addr_spec avec domain-literal, mais sans quoted-string
--

create or replace function dtext () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '[^][\\[:space:][:cntrl:]]' ;

create or replace function domain_literal () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(\[(' || dtext () || ')*\])' ;

create or replace function domain () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || dot_atom() || '|' || domain_literal() || ')' ;

create or replace function addr_spec_v1 () returns TEXT
  -- v1 : avec domain-literal, mais sans quoted-string
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || dot_atom() || '@' || domain() || ')' ;

--
-- v2 : addr_spec avec domain-literal et quoted-string
--

create or replace function qtext () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '[^\\"[:cntrl:]]' ;

create or replace function quoted_pair () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(\\[^[:cntrl:]])' ;

create or replace function qcontent () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || qtext() || '|' || quoted_pair() || ')' ;

create or replace function quoted_string () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '("(' || qcontent()  || ')*")' ;

create or replace function local_part () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || dot_atom() || '|' || quoted_string() || ')' ;

create or replace function addr_spec () returns TEXT
  -- v2 : addr_spec avec domain-literal et quoted-string
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || local_part() || '@' || domain() || ')' ;

--
-- v3 : courriel annoté (mailbox) -- ACA.
--

create or replace function display_name () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '((' || atom() || '|' || quoted_string() || ')+)' ;

create or replace function angle_addr () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(<' || addr_spec()  || '>)' ;

create or replace function name_addr () returns TEXT
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '((' || display_name() || ')?' || angle_addr() || ')' ;

create or replace function mailbox () returns TEXT
  -- v3 : courriel annoté (mailbox).
  immutable
  language sql
  -- conforme SQL et POSIX-ERE
return '(' || name_addr() || '|' || addr_spec() || ')' ;
