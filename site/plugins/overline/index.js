panel.plugin("kirby-bucket/overline-block", {
  blocks: {
    overline: `
      <input
        type="text"
        placeholder="Overline text …"
        :value="content.text"
        @input="update({ text: $event.target.value })"
      />
    `,
  },
});
