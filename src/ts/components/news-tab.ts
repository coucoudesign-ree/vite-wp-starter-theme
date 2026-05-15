export function initNewsTab(): void {
  const tabs = document.querySelectorAll<HTMLButtonElement>('.p-news__tab');
  if (tabs.length === 0) return;

  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      tabs.forEach((t) => {
        t.classList.remove('is-active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('is-active');
      tab.setAttribute('aria-selected', 'true');

      const target = tab.dataset.tab ?? 'all';
      const items = document.querySelectorAll<HTMLElement>('.p-news__item');
      items.forEach((item) => {
        const cat = item.dataset.cat ?? '';
        item.hidden = target !== 'all' && cat !== target;
      });
    });
  });
}
