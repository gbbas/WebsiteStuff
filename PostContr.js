let Active = "";
function ChangePost(Name) {
  console.log(Name);
  console.log(Active);
  if (Active !== "") {
    document.getElementById(Active).className = "BlogPostInactive";
  }
  document.getElementById(Name).className = "BlogPostActive";
  Active = Name;
}
